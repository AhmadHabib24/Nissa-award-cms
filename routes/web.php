<?php

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
    $categories = \App\Models\Category::all();
    $featuredNominees = \App\Models\Nominee::with('category')->withCount('votes')->where('status', 'approved')->inRandomOrder()->get();
    $teamMembers = \App\Models\TeamMember::where('is_active', true)->orderBy('sort_order')->get();
    $pastWinners = \App\Models\PastWinner::where('is_active', true)->latest()->take(8)->get();
    $partners = \App\Models\Partner::where('is_active', true)->orderBy('sort_order')->get();
    $galleryImages = \App\Models\GalleryImage::where('is_active', true)->orderBy('sort_order')->get();
    
    return view('welcome', compact('categories', 'featuredNominees', 'teamMembers', 'pastWinners', 'partners', 'galleryImages'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/previous-editions', function () {
    $editions = \App\Models\Edition::where('year', '<', 2026)->where('is_active', true)->orderBy('year', 'desc')->get();
    $pastWinners = \App\Models\PastWinner::where('is_active', true)->get()->groupBy('edition_name');
    
    return view('editions', compact('editions', 'pastWinners'));
})->name('editions.index');

Route::get('/edition/{year}', function ($year) {
    $edition = \App\Models\Edition::where('year', $year)->where('is_active', true)->firstOrFail();
    return view('edition-detail', compact('edition'));
})->name('edition.detail');

Route::get('/partners', function () {
    $partners = \App\Models\Partner::where('is_active', true)->get();
    return view('partners', compact('partners'));
})->name('partners.index');

Route::get('/sponsor', function () {
    return view('sponsor');
})->name('sponsor');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shipping-policy', function () {
    return view('shipping-policy');
})->name('policy.shipping');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('policy.privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

use App\Http\Controllers\VoteController;

Route::get('/vote', [VoteController::class, 'index'])->name('vote.index');
Route::get('/vote/{category}', [VoteController::class, 'show'])->name('vote.show');
Route::post('/vote/{nominee}', [VoteController::class, 'store'])->name('vote.store');
