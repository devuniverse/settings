<?php

$settingsPath = Config::get('lara-settings.settings_url');

Route::group(['prefix' => $settingsPath,  'middleware' => ['web','auth']], function()
{
  /**
   * GET ROUTES
   */
  Route::get('/', 'Devuniverse\Settings\Controllers\SettingsController@loadIndex');

  /**
  * POST ROUTES
  */

});
