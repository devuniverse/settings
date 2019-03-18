<?php

namespace Devuniverse\Settings\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use Config;
use View;
use Devuniverse\Settings\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
  public function loadIndex(){
    return view('lara-settings::settings');
  }
  public function updateAvatar(Request $request){
    $image = $request->imageurldata;
    $userid= \Auth::user()->id;
    $filePath = 'uploads/settings/'. str_random(12) . '.jpg';
    $s3 = \Storage::disk('s3');
    $imageAmazoned = $s3->put($filePath, file_get_contents($image), 'public');
    if($imageAmazoned){

      $message = _i('Uploaded');
      $msgtype = 1;
      return redirect('/'.Config::get('settings.settings_url'))->with( ['theresponse'=>["message"=> $message, "msgtype"=>$msgtype]] );
    }else{
      $message = _i('Not Uploaded');
      $msgtype = 0;
    }
    return response()->json(['message'=>$message, 'msgtype' => $msgtype]);
  }
  public function loadView(Request $request){
    $theview = $request->view;
    return View::make('lara-settings::partials.settings.'.$theview)->render();
  }
  public function updateSetting(Request $request){
    $data = $request->all();
    foreach ($data as $k => $v) {
      $setting = Setting::where('setting_name',$k )->first();
      if($setting){
        $setting->setting_value = $v==''? 'nulled': $v;
        $setting->update_by = \Auth::user()->id;
        $setting->save();
        if($setting->id){
          $message = _i('Updated successfully');
          $msgtype = 1;
        }else{
          $message = _i('Errors were encountered');
          $msgtype = 0;
        }
      }else{
        $newSet = new Setting();
        $newSet->setting_name  = $k;
        $newSet->setting_value = $v==''? 'nulled': $v;
        $newSet->created_by = \Auth::user()->id;
        $newSet->update_by = '';
        $newSet->save();
        if($newSet->id){
          $message = _i('Created successfully');
          $msgtype = 1;
        }else{
          $message = _i('Errors were encountered');
          $msgtype = 0;
        }

      }
    }
    $settingUrl = \Config::get('lara-settings.settings_url');
    return redirect('/'.$settingUrl)->with( ['theresponse'=>["message"=> $message, "msgtype"=>$msgtype]] );
   // print_r($data);
  }
}
