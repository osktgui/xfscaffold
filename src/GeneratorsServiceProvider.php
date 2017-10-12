<?php namespace xf\xfscaffold;

use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider {

  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot() {
    //
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register() {
    $this->registerScaffoldGenerator();
  }

  /**
   * Register the make:scaffold generator.
   *
   * @return void
   */
  private function registerScaffoldGenerator() {
    $this->app->singleton('command.xf.scaffold', function ($app) {
      return $app['xf\xfscaffold\Commands\XFScaffoldCommand'];
    });
    $this->commands('command.xf.scaffold');
  }

}