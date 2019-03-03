@extends(Config::get('profiles.master_file_extend'))

@section(Config::get('profiles.yields.head'))
    @if(Config::get('profiles.includes.fontawesome'))
      <link rel="stylesheet" href="{{ url('/profiles/assets/fontawesome/css/all.css') }}">
    @endif
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/dropzone.css') }}">
    @if(Config::get('profiles.includes.animate'))
      <link rel="stylesheet" href="{{ url('/profiles/assets/css/animate.css') }}">
    @endif
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/nexus.css') }}">
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/styled.css') }}">
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/profile.css') }}">
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/tablet.css') }}">
    <link rel="stylesheet" href="{{ url('/profiles/assets/css/desktop.css') }}">
@endsection

@section(Config::get('profiles.yields.footer'))
  @if( Config::get('profiles.includes.jquery'))
    <script src="{{ url('/profiles/assets/js/jquery.js') }}"></script>
  @endif
    <script src="{{ url('/profiles/assets/js/profile.js') }}"></script>
@endsection

@section(Config::get('profiles.yields.profiles-content'))

  <div class="full-profile">
    <!-- <div class="alert alert-success">

    </div> -->
    <div class="profile">
      <div class="cell nexus--1-6">
        <div class="profile-inner">
          <div class="photo">
            <input type="file" accept="image/*">
            <div class="photo__helper">
                <div class="photo__frame photo__frame--circle">
                  <canvas class="photo__canvas"></canvas>
                  <div class="message is-empty">
                      <p class="message--desktop">Drop your photo here or browse your computer.</p>
                      <p class="message--mobile">Tap here to select your picture.</p>
                  </div>
                  <div class="message is-loading">
                      <i class="fa fa-2x fa-spin fa-spinner"></i>
                  </div>
                  <div class="message is-dragover">
                      <i class="fa fa-2x fa-cloud-upload"></i>
                      <p>Drop your photo</p>
                  </div>
                  <div class="message is-wrong-file-type">
                      <p>Only images allowed.</p>
                      <p class="message--desktop">Drop your photo here or browse your computer.</p>
                      <p class="message--mobile">Tap here to select your picture.</p>
                  </div>
                  <div class="message is-wrong-image-size">
                      <p>Your photo must be larger than 350px.</p>
                  </div>
                </div>
            </div>
            <div class="photo__options hide">
                <div class="photo__zoom">
                    <input type="range" class="zoom-handler">
                </div><a href="javascript:;" class="remove"><i class="fa fa-trash"></i></a>
            </div>
          </div>
          <button type="button" class="btn btn-primary" id="previewBtn">Preview</button>
          <div class="nav-holder">
            <ul>
              <li class="selected" data-content="about"><i class="fa fa-info-circle" aria-hidden="true"></i> <span>About Me</span></li>
              <li  data-content="security"><i class="fa fa-lock" aria-hidden="true"></i> <span>Security</span></li>
              <li  data-content="other"><i class="fa fa-life-ring" aria-hidden="true"></i> <span>Other</span></li>
            </ul>
          </div>
        </div>
      </div><div class="cell nexus--5-6 profile-sidemain">
        <div class="profile-inner">
          <div class="tab-content content-about">

          </div>
          <div class="hidden tab-content content-security">

          </div>
          <div class="hidden tab-content content-other">
              
          </div>
        </div>
      </div>
    </div>

    <div class="previews-container">
      <img src="" alt="" class="preview">
      <!-- <img src="" alt="" class="preview preview--rounded"> -->
    </div>
    <!-- <button type="button" class="btn btn-primary" id="uploadBtn">Upload Example</button> -->
  </div>

@endsection
