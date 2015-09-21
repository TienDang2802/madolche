<?php namespace Madolche\Tutita;

use Illuminate\Support\ServiceProvider;

class TutitaServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['tutita'] = $this->app->share(function($app){
            return new Tutita;
        });
	}

}
