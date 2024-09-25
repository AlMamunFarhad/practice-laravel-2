<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Task;
use App\Policies\TaskPolicy;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{

   // Gate::TaskPolicy(function (string $task) {
   //          return 'App\\Policies\\' . class_basename($task) . 'Policy';
   //  });
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
          // Gate::policy(Task::class, TaskPolicy::class);
    }
}
