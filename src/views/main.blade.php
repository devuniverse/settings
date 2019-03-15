<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading images in Laravel with DropZone</title>

    <link rel="stylesheet" href="{{ url('/lara-settings/assets/css/bootstrap.css') }}">

    @yield(Config::get('lara-settings.yields.head'))
</head>
<body>
    <div class="container-fluid settings-main">
        @yield(Config::get('lara-settings.yields.settings-content'))
    </div>
    <script type="text/javascript">
      var settingsPath = "<?php echo Config::get("lara-settings.settings_url") ?>";
    </script>
    @yield(Config::get('lara-settings.yields.footer'))


</body>
</html>
