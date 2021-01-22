<?php

namespace Modules\Leads\Providers;

class LeadsRouteServiceProvider extends ServiceProvider {

    /**
     * Called before routes are registered
     *
     * Register any model bindings or pattern based filters
     *
     * @return void
     */
    public function boot(): void {
        parent::boot();
    }

    /**
     * Define the routes for leads module
     *
     * @return void
     */
    public function map(): void {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the web routes for this module
     *
     * @todo remove facade and use DI in constructor
     * @return void
     */
    protected function mapWebRoutes() {
        Route::middleware('web')->group(module_path('Leads', 'Routes/web.php'));
    }

    /**
     * Define the web routes for this module
     *
     * @todo remove facade and use DI in constructor
     * @return void
     */
    protected function mapApiRoutes() {
        Route::middleware('api')->group(module_path('Leads', 'Routes/api.php'));
    }
}