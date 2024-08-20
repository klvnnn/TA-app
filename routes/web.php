<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DigitalSignatureController;
use App\Http\Controllers\LetterFormatController;
use App\Http\Controllers\LetterInController;
use App\Http\Controllers\LetterOutController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Archive;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $registeredUser = User::get()->count();
    $manager = User::where('role','manager')->count();
    $admin = User::where('role','admin')->count();
    $archivist = User::where('role','archivist')->count();
    $arsipsigned = Archive::where('status', 'signed')->count();
    $arsipdiproses = Archive::where('status', 'diproses')->count();
    $arsipditolak = Archive::where('status', 'ditolak')->count();
    return view('pages.dashboard',[
        'registeredUser' => $registeredUser,
        'manager' => $manager,
        'admin' => $admin,
        'archivist' => $archivist,
        'arsipsigned' => $arsipsigned,
        'arsipdiproses' => $arsipdiproses,
        'arsipditolak' => $arsipditolak,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::prefix('surat')->group(function(){
        //Letter In
        Route::get('/surat-masuk', [LetterInController::class, 'index'])->name('surat-masuk.index');
        Route::get('/surat-masuk/create', [LetterInController::class, 'create'])->name('surat-masuk.create');
        Route::post('/surat-masuk/create', [LetterInController::class, 'store'])->name('surat-masuk.store');
        Route::get('/surat-masuk/show{id}', [LetterInController::class, 'show'])->name('surat-masuk.show');
        Route::get('/surat-masuk/edit/{id}', [LetterInController::class, 'edit'])->name('surat-masuk.edit');
        Route::put('/surat-masuk/update/{id}', [LetterInController::class, 'update'])->name('surat-masuk.update');
        Route::delete('/surat-masuk/delete/{id}', [LetterInController::class, 'destroy'])->name('surat-masuk.delete');
        //Letter Out
        Route::get('/surat-keluar', [LetterOutController::class, 'index'])->name('surat-keluar.index');
        Route::get('/surat-keluar/create', [LetterOutController::class, 'create'])->name('surat-keluar.create');
        Route::post('/surat-keluar/create', [LetterOutController::class, 'store'])->name('surat-keluar.store');
        Route::get('/surat-keluar/show{id}', [LetterOutController::class, 'show'])->name('surat-keluar.show');
        Route::get('/surat-keluar/edit/{id}', [LetterOutController::class, 'edit'])->name('surat-keluar.edit');
        Route::put('/surat-keluar/update/{id}', [LetterOutController::class, 'update'])->name('surat-keluar.update');
        Route::delete('/surat-keluar/delete/{id}', [LetterOutController::class, 'destroy'])->name('surat-keluar.delete');
        //Letter Format
        Route::get('/format', [LetterFormatController::class, 'index'])->name('surat-format.index');
        Route::get('/format/create', [LetterFormatController::class, 'create'])->name('surat-format.create');
        Route::post('/format/create', [LetterFormatController::class, 'store'])->name('surat-format.store');
        Route::get('/format/edit/{id}', [LetterFormatController::class, 'edit'])->name('surat-format.edit');
        Route::put('/format/update/{id}', [LetterFormatController::class, 'update'])->name('surat-format.update');
        Route::delete('/format/delete/{id}', [LetterFormatController::class, 'destroy'])->name('surat-format.delete');
        //Print
        Route::get('/print/surat-masuk', [PrintController::class, 'incoming'])->name('surat-masuk.print');
        Route::get('/print/surat-keluar', [PrintController::class, 'outgoing'])->name('surat-keluar.print');
    });

    Route::prefix('arsip')->group(function(){
        //Archive
        Route::get('/index', [ArchiveController::class, 'index'])->name('arsip.index');
        Route::get('/create', [ArchiveController::class, 'create'])->name('arsip.create');
        Route::post('/create', [ArchiveController::class, 'store'])->name('arsip.store');
        Route::get('/show/{id}', [ArchiveController::class, 'show'])->name('arsip.show');
        Route::get('/verify', [ArchiveController::class, 'verify'])->name('arsip.verify');
        Route::get('/status', [ArchiveController::class, 'status'])->name('arsip.status');
        Route::get('/alldata', [ArchiveController::class, 'alldata'])->name('arsip.alldata');
        Route::get('/reset/status/reject', [ArchiveController::class, 'resetRejected'])->name('arsip.reset.rejected');
    });

    Route::prefix('sign')->group(function(){
        //Request Sign
        Route::post('/generate-key', [DigitalSignatureController::class, 'generateKeys'])->name('sign.create-key');
        Route::get('/dokumen/request', [DigitalSignatureController::class, 'signRequest'])->name('sign.request');
        Route::get('/dokumen/{id}', [DigitalSignatureController::class, 'signDocument'])->name('sign.document');
        Route::get('/dokumen/show/{id}', [DigitalSignatureController::class, 'show'])->name('sign.show');
        Route::get('/dokumen/verify/{id}', [DigitalSignatureController::class, 'verifyDocument'])->name('sign.verify');
        Route::post('/dokumen/{id}/reject', [DigitalSignatureController::class, 'rejectDocument'])->name('sign.reject');
    });
    
    //Departement
    Route::get('/departement', [DepartementController::class, 'index'])->name('departement.index');
    Route::get('/departement/create', [DepartementController::class, 'create'])->name('departement.create');
    Route::post('/departement/create', [DepartementController::class, 'store'])->name('departement.store');
    Route::delete('/departement/delete/{id}', [DepartementController::class, 'destroy'])->name('departement.delete');

    //User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
    Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');

    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
