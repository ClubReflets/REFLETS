<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('uiText', 'components.form.text', ['name', 'label' => '', 'value' => null, 'attributes' => []]);
        Form::component('uiTextarea', 'components.form.textarea', ['name', 'label' => null, 'value' => null, 'attributes' => []]);
        Form::component('uiSubmit', 'components.form.submit', ['value' => 'Envoyer', 'attributes' => []]);
        Form::component('uiHidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        Form::component('uiFile', 'components.form.file', ['name', 'label' => null]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
