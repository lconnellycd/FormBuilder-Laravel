<?php

namespace Nomensa\FormBuilder;

use Illuminate\Support\ServiceProvider;

class FormBuilderServiceProvider extends ServiceProvider {

    protected $commands = [
        'Nomensa\FormBuilder\Commands\MakeFormCommand',
        'Nomensa\FormBuilder\Commands\InstallCommand'
    ];

    public function register(){
        $this->commands($this->commands);

         if (! $this->app->providerIsLoaded(\Spatie\Html\HtmlServiceProvider::class)) {
            $this->app->register(\Spatie\Html\HtmlServiceProvider::class);
        }
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

}
