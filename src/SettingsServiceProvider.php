<?php

namespace Devuniverse\Settings;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      include __DIR__.'/Routes/web.php';
      $this->publishes([
        __DIR__.'/Config/settings.php' => config_path('lara-settings.php'),
        __DIR__.'/public' => public_path('lara-settings/assets'),
      ]);
      // $this->publishes([
      //     __DIR__.'/database/' => database_path(),
      // ], 'lara-settings');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');

      /************************  TO VIEWS ***************************/

      view()->composer('*', function ($view){
       $request =  Request();
       if(\Auth::check()){


       };
      });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      // register our controller
      $this->app->make('Devuniverse\Settings\Controllers\SettingsController');
      $this->loadViewsFrom(__DIR__.'/views', 'lara-settings');

      $this->mergeConfigFrom(
          __DIR__.'/Config/settings.php', 'lara-settings'
      );
    }
}
