@extends(Config::get('lara-settings.master_file_extend'))

@section(Config::get('lara-settings.yields.head'))
    @if(Config::get('lara-settings.includes.fontawesome'))
      <link rel="stylesheet" href="{{ url('/lara-settings/assets/fontawesome/css/all.css') }}">
    @endif
    @if(Config::get('lara-settings.includes.animate'))
      <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/animate.css') }}">
    @endif
    @if(Config::get('lara-settings.includes.animate'))
    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/nexus.css') }}">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/styled.css') }}">
    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/tablet.css') }}">
    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/desktop.css') }}">
@endsection

@section(Config::get('lara-settings.yields.footer'))
  <script type="text/javascript">
    var settingsPath = "/<?php echo \Config::get('lara-settings.settings_url')?>";
  </script>
  @if( Config::get('lara-settings.includes.jquery'))
    <script src="{{ url('/lara-settings/assets/js/jquery.js') }}"></script>
  @endif
    <script src="{{ url('/lara-settings/assets/js/settings.js') }}"></script>

@endsection

@section(Config::get('lara-settings.yields.settings-content'))
  <?php $settingsUrl  =  Config::get('lara-settings.settings_url'); ?>
  <div class="full-settings">
    <div class="settings-inner">
       <form class="save-allsettings" action="{{ url($settingsUrl.'/update') }}" method="post">
         @csrf
         <input type="hidden" name="thisauth" value="<?php echo \Auth::user()->id;  ?>">

         <div class="top-bar-saving">
           <div class="float-right">
             <button type="submit" class="btn btn-primary save-settings-btn" name="save-settings">{{ _i('Save') }}</button>
             <a class="btn btn-primary btn-danger" href="{{  url()->previous() }}">{{ _i('Cancel') }}</a>
           </div>
         </div>
         <div class="form-content">
           <div class="navigate-settings">
             <ul>
               <li class="active" data-content="general">{{ _i('General') }}</li>
               <li  data-content="security">{{ _i('Security') }}</li>
               <li  data-content="seo">{{ _i('SEO') }}</li>
               <li  data-content="languages">{{ _i('Languages') }}</li>
               <li  data-content="miscellaneous">{{ _i('Miscellaneous') }}</li>
             </ul>
           </div>
           <div class=form-content-tabscontent>
             @include('lara-settings::partials.settings.general')
           </div>

         </div>
       </form>

    </div>
    <!-- <button type="button" class="btn btn-primary" id="uploadBtn">Upload Example</button> -->
  </div>

@endsection
