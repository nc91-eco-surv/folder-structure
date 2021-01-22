<?php

use Modules\Leads\Http\Handlers\LeadStore;

$router
    ->prefix('leads')
    ->middleware('auth')
    ->group(function($router) {

        $router->post('/', [
            'uses'  => LeadStore::class,
            'as'    => 'lead.store'
        ]);

    });