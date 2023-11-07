<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\DashboardAdmin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', DashboardAdmin::class)->name('dashboard');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    // Dinas Routes
// Route::middleware(['auth', 'user-role:admin'])->group(function () {
//     Route::get('/dashboard', Dashboard::class)->name('dashboard');
//     Route::get('/dashboard-dinas', DashboardDinas::class)->name('dashboard-dinas');
//     Route::get('/user-profile-dinas', UserProfile::class)->name('user-profile');
//     Route::get('/manajemen-user', ManajemenUser::class)->name('user-management');
//     Route::get('/absensi-mahasiswa-aktif', MahasiswaAktif::class)->name('mahasiswa-aktif');
//     Route::get('/verifikasi-mahasiswa', VerifikasiMahasiswa::class)->name('verifikasi-mahasiswa');
//     Route::get('/manajemen-kehadiran', ManajemenKehadiran::class)->name('preview-presensi-harian');
// });

require __DIR__.'/auth.php';
