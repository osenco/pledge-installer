<?php

namespace Pledge\Install\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Pledge\Install\Middleware\canInstall;

class InstallServiceProvider extends ServiceProvider
{
 /**
  * Indicates if loading of the provider is deferred.
  *
  * @var bool
  */
 protected $defer = false;

 /**
  * Register the service provider.
  *
  * @return void
  */
 public function register()
 {
  $this->publishFiles();

  include __DIR__ . '/../routes.php';
 }

 /**
  * Bootstrap the application events.
  *
  * @param \Illuminate\Routing\Router $router
  * @return void
  */
 public function boot(Router $router)
 {
  $router->middlewareGroup('install', [canInstall::class]);
 }

 /**
  * Publish config file for the install.
  *
  * @return void
  */
 protected function publishFiles()
 {
  $this->publishes([
   __DIR__ . '/../Config/install.php' => base_path('config/install.php'),
  ]);

  $this->publishes([
   __DIR__ . '/../assets' => public_path('install'),
  ], 'public');

  $this->publishes([
   __DIR__ . '/../Views' => base_path('resources/views/vendor/install'),
  ]);

  $this->publishes([
   __DIR__ . '/../Lang' => base_path('lang'),
  ]);
 }
}
