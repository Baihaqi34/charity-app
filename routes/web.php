<?php

use App\Http\Controllers\CampaignController;
use App\Models\Kategori;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('home');`
// })->name('home');

Route::get('/p', function () {
    return view('user.campaign.tambah-campaign');
})->name('s');
Route::get('/w', function () {
    return view('welcome');
})->name('welcome');

// Route::view('admin.dashboard', 'admin.dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified', AdminMiddleware::class])
    ->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::redirect('settings', 'settings/profile');

        Route::get('settings/profile', Profile::class)->name('settings.profile');
        Route::get('settings/password', Password::class)->name('settings.password');
        Route::get('settings/appearance', Appearance::class)->name('settings.appearance');


        // Crud Kategori
        Route::get('kategori', [KategoriController::class, 'index']);
        Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
        Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    });


    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update'])->name('update.profile');


    Route::post('create-rekening', [ProfileController::class, 'createRekening'])->name('create.rekening');
    Route::post('update-rekening/{id}', [ProfileController::class, 'updateRekening'])->name('update.rekening');
    Route::get('delete-rekening/{id}', [ProfileController::class, 'deleteRekening'])->name('delete.rekening');



    Route::get('create-campaign', [CampaignController::class, 'create']);
    Route::post('/create-campaign', [CampaignController::class, 'store']);
});

require __DIR__ . '/auth.php';
