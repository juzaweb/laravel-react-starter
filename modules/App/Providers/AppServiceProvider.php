<?php

namespace LarabizCom\Modules\App\Providers;

use Illuminate\Database\Eloquent\Model;
use LarabizCms\Core\Providers\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Enable Model strict mode.
        // See more: https://laravel.com/docs/9.x/eloquent#configuring-eloquent-strictness
        Model::shouldBeStrict(! $this->app->isProduction());

        $this->loadCustomizer(__DIR__ . '/../customizer.php');
    }
}
