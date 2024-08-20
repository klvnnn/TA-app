<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Models\Archive;

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
            $isSuratMasukCreateActive = Str::contains($currentRouteName, 'surat-masuk.create');
            $isSuratMasukListActive = Str::contains($currentRouteName, 'surat-masuk.index');
            $isSuratKeluarActive = Str::contains($currentRouteName, 'surat-keluar');
            $isSuratKeluarCreateActive = Str::contains($currentRouteName, 'surat-keluar.create');
            $isSuratKeluarListActive = Str::contains($currentRouteName, 'surat-keluar.index');
            $isSuratFormatActive = Str::contains($currentRouteName, 'surat-format');
            $isSuratFormatCreateActive = Str::contains($currentRouteName, 'surat-format.create');
            $isSuratFormatListActive = Str::contains($currentRouteName, 'surat-format.index');
            //Arsip Route
            $isArsipActive = Str::contains($currentRouteName, 'arsip');
            $isArsipCreateActive = Str::contains($currentRouteName, 'arsip.create');
            $isArsipListActive = Str::contains($currentRouteName, 'arsip.index');
            $isArsipDataActive = Str::contains($currentRouteName, 'arsip.alldata');
            $isArsipVerifyActive = Str::contains($currentRouteName, 'arsip.verify');
            $isArsipStatusActive = Str::contains($currentRouteName, 'arsip.status');
            //Departement Route
            $isDepartementActive = Str::contains($currentRouteName, 'departement');
            //Signature Route
            $isSignActive = Str::contains($currentRouteName, 'sign');
            $signRequestCount = Archive::where('status', 'diproses')->count();
            //User Route
            $isUserActive = Str::contains($currentRouteName, 'user');
            $isUserCreateActive = Str::contains($currentRouteName, 'user.create');
            $isUserListActive = Str::contains($currentRouteName, 'user.index');
    
            // Dashboard Variable
            $view->with('isDashboardActive', $isDashboardActive);
            //Surat Variable
            $view->with('isSuratActive', $isSuratActive);
            $view->with('isSuratMasukActive', $isSuratMasukActive);
            $view->with('isSuratMasukCreateActive', $isSuratMasukCreateActive);
            $view->with('isSuratMasukListActive', $isSuratMasukListActive);
            $view->with('isSuratKeluarActive', $isSuratKeluarActive);
            $view->with('isSuratKeluarCreateActive', $isSuratKeluarCreateActive);
            $view->with('isSuratKeluarListActive', $isSuratKeluarListActive);
            $view->with('isSuratFormatActive', $isSuratFormatActive);
            $view->with('isSuratFormatCreateActive', $isSuratFormatCreateActive);
            $view->with('isSuratFormatListActive', $isSuratFormatListActive);
            //Arsip Variable
            $view->with('isArsipActive', $isArsipActive);
            $view->with('isArsipCreateActive', $isArsipCreateActive);
            $view->with('isArsipListActive', $isArsipListActive);
            $view->with('isArsipDataActive', $isArsipDataActive);
            $view->with('isArsipVerifyActive', $isArsipVerifyActive);
            $view->with('isArsipStatusActive', $isArsipStatusActive);
            //Departement Variable
            $view->with('isDepartementActive', $isDepartementActive);
            //Request Variable
            $view->with('isSignActive', $isSignActive);
            $view->with('signRequestCount', $signRequestCount);
            //User Variable
            $view->with('isUserActive', $isUserActive);
            $view->with('isUserCreateActive', $isUserCreateActive);
            $view->with('isUserListActive', $isUserListActive);
            //Current Route Variable
            $view->with('currentRouteName', $currentRouteName);
        });
    }
}
