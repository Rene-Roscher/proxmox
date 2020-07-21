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

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('proxmox', function()
		{
		    return new \ProxmoxVE\Proxmox(Config::get('proxmox::server.server'));
		});
	}

}
