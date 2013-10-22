<?php namespace Nra\Service;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('nra/service');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['service']	=	$this->app->share(function($app){

			return new Service;

		});

		$this->app->booting( function() {

			$loader		=		\Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Service', '\Nra\Service\Facades\Service');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('service');
	}

}