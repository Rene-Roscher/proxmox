<?php namespace Someguy123\Proxmox;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ProxmoxServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->publishes([
		    __DIR__.'/../../config/proxmox.php' => config_path('proxmox.php'),
		]);
	}
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('proxmox', function()
		{
		    return new \ProxmoxVE\Proxmox($app['config']->get('proxmox.server'));
		});
	}

}
