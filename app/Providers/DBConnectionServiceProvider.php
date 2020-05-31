<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DBConnectionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $url = explode('/', url()->current());
        $databaseName = $url[2] !== 'localhost' ? $url[2] : 'mercado-online';
        \Config::set('database.connections.pgsql.database', $databaseName);
        \DB::reconnect('pgsql');
    }
}
