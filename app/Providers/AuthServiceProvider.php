<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // use Of Gate
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });

        Gate::define('isEditor', function ($user) {
            return $user->role == 'editor';
        });
    }

    /**
     * Register any authentication / authorization policies.
     */
    protected function registerPolicies(): void
    {
        // Register policies here
    }
}