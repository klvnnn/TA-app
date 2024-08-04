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
            //Dashboard Route
            $isDashboardActive = Str::contains($currentRouteName, 'dashboard');
            //Surat Route
            $isSuratActive = Str::contains($currentRouteName, 'surat');
            $isSuratMasukActive = Str::contains($currentRouteName, 'surat-masuk');
            $isSuratKeluarActive = Str::contains($currentRouteName, 'surat-keluar');
            $isSuratFormatActive = Str::contains($currentRouteName, 'surat-format');
            //Arsip Route
            $isArsipActive = Str::contains($currentRouteName, 'arsip');
            $isArsipSignActive = Str::contains($currentRouteName, 'arsip.sign');
            $isArsipListActive = Str::contains($currentRouteName, 'arsip.index');
            //Departement Route
            $isDepartementActive = Str::contains($currentRouteName, 'departement');
            //Signature Route
            $isRequestActive = Str::contains($currentRouteName, 'request');
            //User Route
            $isUserActive = Str::contains($currentRouteName, 'user');
    
            // Dashboard Variable
            $view->with('isDashboardActive', $isDashboardActive);
            //Surat Variable
            $view->with('isSuratActive', $isSuratActive);
            $view->with('isSuratMasukActive', $isSuratMasukActive);
            $view->with('isSuratKeluarActive', $isSuratKeluarActive);
            $view->with('isSuratFormatActive', $isSuratFormatActive);
            //Arsip Variable
            $view->with('isArsipActive', $isArsipActive);
            $view->with('isArsipSignActive', $isArsipSignActive);
            $view->with('isArsipListActive', $isArsipListActive);
            //Departement Variable
            $view->with('isDepartementActive', $isDepartementActive);
            //Request Variable
            $view->with('isRequestActive', $isRequestActive);
            //User Variable
            $view->with('isUserActive', $isUserActive);
            //Current Route Variable
            $view->with('currentRouteName', $currentRouteName);
        });
    }
}
