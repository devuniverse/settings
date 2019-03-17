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
      $message = _i('Uploaded');
      $msgtype = 0;
    }
    return response()->json(['message'=>$message, 'msgtype' => $msgtype]);
  }
  public function loadView(Request $request){
    $theview = $request->view;
    return View::make('lara-settings::partials.settings.'.$theview)->render();
  }
  public function updateSetting(Request $request){

  }
}
