<?php
return [

  /**
   *|
   */
  "settings_url_protocol"      => "https",
  /**
   *|
   */
  "settings_url"      => "dashboard/settings",
  /**
   *|
   */
  "master_file_extend" => "lara-settings::main",

  // "default_file_system" => "public",
  /**
   *|
   */
  'yields' => [
      'head'   => 'css',
      'footer' => 'js',
      'settings-content'=>'content'
  ],
  /**
   *|
   */
  'includes' => [
      'jquery'   => true,
      'animate' => true,
      'fontawesome' => true,
      'nexus' => false
  ],
  'override_default' => false
];
