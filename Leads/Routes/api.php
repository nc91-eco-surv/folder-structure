<?php

use Modules\Leads\Http\Handlers\LeadStore;

$router
    ->prefix('leads')
    ->middleware('auth')
    ->group(function($router) {


        $router->get('/', [
            'uses'  => LeadStore::class,
            'as'    => 'lead.store'
        ]);

    });