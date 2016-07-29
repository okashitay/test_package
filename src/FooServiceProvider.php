<?php namespace Okasuke\FooPackage;

class FooServiceProvider extends \Illuminate\Support\ServiceProvider
{
	/**
     * 遅延ローディング
     * @var bool
     */
    protected $defer = true;

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'myconfig');
        $this->app->singleton('foopackage', function($app) {
            $config = $app['config'];
            return new FooPackage($config->get('myconfig.test'));
        });
    }

    public function boot()
    {
        $this->publishes([$this->configPath() => config_path('myconfig.php')], 'config');
    }

    public function provides()
    {
        return ['foopackage'];
    }

    protected function configPath()
    {
        return __DIR__ . '/../config/myconfig.php';
    }
}
