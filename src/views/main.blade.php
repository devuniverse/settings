<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading images in Laravel with DropZone</title>

    <link rel="stylesheet" href="{{ url('/profiles/assets/css/bootstrap.css') }}">

    @yield(Config::get('profiles.yields.head'))
</head>
<body>
    <div class="container-fluid profiles-main">
        @yield(Config::get('profiles.yields.profiles-content'))
    </div>
    <script type="text/javascript">
      var profilesPath = "<?php echo Config::get("profiles.profiles_url") ?>";
    </script>
    @yield(Config::get('profiles.yields.footer'))


</body>
</html>
