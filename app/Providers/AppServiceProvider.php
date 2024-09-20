<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, EloquentStudentRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, EloquentDoctorRepository::class);
        $this->app->bind(HRRepositoryInterface::class, EloquentHRRepository::class);
        $this->app->singleton(OrganizationRepository::class, function ($app) {
            return new OrganizationRepository();
        });
        $this->app->singleton(CourseRepository::class, function ($app) {
            return new CourseRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    
}
