<?php

namespace Modules\Leads\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class LeadServiceProvider extends ServiceProvider {

    /**
     * The name of the Module
     *
     * @var string
     */
    private $moduleName = "Leads";

    public function boot(): void { }
    public function register(): void { }
    public function registerConfig(): void { }

    /**
     * Register database factories
     *
     * @return void
     */
    public function registerFactories(): void {
        if(! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path($this->_moduleName, "Database/factories"))
        }
    }
}