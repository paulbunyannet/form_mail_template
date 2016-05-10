<?php

namespace Pbc\FormMailTemplate\Providers;

use Illuminate\Support\ServiceProvider;

class FormMailTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/Resources/Views', 'pbc_form_mail_template');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {}
}
