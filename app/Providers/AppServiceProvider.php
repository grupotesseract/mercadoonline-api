<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(\Faker\Generator::class, function () {

            $faker = \Faker\Factory::create('pt_BR');

            //Caso necessario, novos providers devem ser adicionados aqui.
            $faker->addProvider(new \Faker\Provider\pt_BR\Company($faker));
            $faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($faker));
            $faker->addProvider(new \Faker\Provider\en_US\Payment($faker));

            return $faker;
        });
    }
}
