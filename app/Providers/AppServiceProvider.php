<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Gate;
use app\Models\User;
use app\Models\Job;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        Password::defaults(function () {
            return 
                Password::min(8)
                ->max(255)
                ->mixedCase()
                ->numbers()
                ->symbols();
        });

        // Gate::define('edit-job', function(User $user, Job $job){
        //     return $job->employer->User->is($user);
        // });
    }
}
