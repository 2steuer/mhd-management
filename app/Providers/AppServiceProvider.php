<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Form::component('appEditForm', 'components.form.form_edit', ['model', 'form_route', 'back_route', 'form_partial']);
        Form::component('appNewForm', 'components.form.form_new', ['form_route', 'back_route', 'form_partial']);

        Form::component('appText', 'components.form.text', ['name', 'description', 'value' => null, 'attributes' => []]);
        Form::component('appEmail', 'components.form.email', ['name', 'description', 'value' => null, 'attributes' => []]);
        Form::component('appCheckbox', 'components.form.checkbox', ['name', 'description', 'value' => null, 'attributes' => []]);
        Form::component('appPassword', 'components.form.password', ['name', 'description', 'value' => null, 'attributes' => []]);

        \Html::component('appNavLink', 'components.nav.nav_link', ['route', 'name', 'route_params' => [], 'level_index' => 0, 'active' => false]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
