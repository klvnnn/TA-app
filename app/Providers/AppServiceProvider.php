<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        \view()->composer('*', function ($view) {
            $currentRouteName = \request()->route()->getName();

            $isDashboardActive = Str::contains($currentRouteName, 'dashboard');
            $isSuratActive = Str::contains($currentRouteName, 'surat');
            $isArsipActive = Str::contains($currentRouteName, 'arsip');
            $isDepartementActive = Str::contains($currentRouteName, 'departement');
            $isRequestActive = Str::contains($currentRouteName, 'request');
            $isUserActive = Str::contains($currentRouteName, 'user');
    
            // Tambahkan ariabel baru yang menentukan apakah prefix surat sedang aktif
            $view->with('isDashboardActive', $isDashboardActive);
            $view->with('isSuratActive', $isSuratActive);
            $view->with('isArsipActive', $isArsipActive);
            $view->with('isDepartementActive', $isDepartementActive);
            $view->with('isRequestActive', $isRequestActive);
            $view->with('isUserActive', $isUserActive);
            $view->with('currentRouteName', $currentRouteName);
        });
    }
}
