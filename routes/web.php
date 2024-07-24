<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('index', [CustomAuthController::class, 'dashboard']); 
Route::get('signin', [CustomAuthController::class, 'index'])->name('signin');
Route::post('custom-login', [CustomAuthController::class, 'customSignin'])->name('signin.custom'); 
Route::get('signup', [CustomAuthController::class, 'registration'])->name('signup');
Route::post('custom-register', [CustomAuthController::class, 'customRegister'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('add-gigs', function () {
    return view('add-gigs');
})->name('add-gigs');

Route::get('billing-settings', function () {
    return view('billing-settings');
})->name('billing-settings');

Route::get('blog-2-grid', function () {
    return view('blog-2-grid');
})->name('blog-2-grid');

Route::get('blog-carousel', function () {
    return view('blog-carousel');
})->name('blog-carousel');

Route::get('blog-details-right-sidebar', function () {
    return view('blog-details-right-sidebar');
})->name('blog-details-right-sidebar');

Route::get('blog-details-sidebar', function () {
    return view('blog-details-sidebar');
})->name('blog-details-sidebar');

Route::get('blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('blog-list', function () {
    return view('blog-list');
})->name('blog-list');

Route::get('blog-mansory', function () {
    return view('blog-mansory');
})->name('blog-mansory');

Route::get('blog-right-sidebar', function () {
    return view('blog-right-sidebar');
})->name('blog-right-sidebar');

Route::get('blog-sidebar', function () {
    return view('blog-sidebar');
})->name('blog-sidebar');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('categories-2', function () {
    return view('categories-2');
})->name('categories-2');

Route::get('categories', function () {
    return view('categories');
})->name('categories');

Route::get('change-password', function () {
    return view('change-password');
})->name('change-password');

Route::get('coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('contact-us-v2', function () {
    return view('contact-us-v2');
})->name('contact-us-v2');

Route::get('contact-us-v3', function () {
    return view('contact-us-v3');
})->name('contact-us-v3');

Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('edit-gigs', function () {
    return view('edit-gigs');
})->name('edit-gigs');

Route::get('error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('error-500', function () {
    return view('error-500');
})->name('error-500');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('integration-settings', function () {
    return view('integration-settings');
})->name('integration-settings');

Route::get('lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');

Route::get('notification-settings', function () {
    return view('notification-settings');
})->name('notification-settings');

Route::get('portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio-details');

Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('preference-settings', function () {
    return view('preference-settings');
})->name('preference-settings');

Route::get('pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('service-details', function () {
    return view('service-details');
})->name('service-details');

Route::get('service-grid-sidebar', function () {
    return view('service-grid-sidebar');
})->name('service-grid-sidebar');

Route::get('service-sub-category', function () {
    return view('service-sub-category');
})->name('service-sub-category');

Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('signin', function () {
    return view('signin');
})->name('signin');

Route::get('signup', function () {
    return view('signup');
})->name('signup');

Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('team-carousel', function () {
    return view('team-carousel');
})->name('team-carousel');

Route::get('team-details', function () {
    return view('team-details');
})->name('team-details');

Route::get('terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');

Route::get('under-construction', function () {
    return view('under-construction');
})->name('under-construction');

Route::get('user-dashboard', function () {
    return view('user-dashboard');
})->name('user-dashboard');

Route::get('user-files', function () {
    return view('user-files');
})->name('user-files');

Route::get('user-gigs', function () {
    return view('user-gigs');
})->name('user-gigs');

Route::get('user-message', function () {
    return view('user-message');
})->name('user-message');

Route::get('user-notification', function () {
    return view('user-notification');
})->name('user-notification');

Route::get('user-payments', function () {
    return view('user-payments');
})->name('user-payments');

Route::get('user-profile', function () {
    return view('user-profile');
})->name('user-profile');

Route::get('user-purchase', function () {
    return view('user-purchase');
})->name('user-purchase');

Route::get('user-reviews', function () {
    return view('user-reviews');
})->name('user-reviews');

Route::get('user-sales', function () {
    return view('user-sales');
})->name('user-sales');

Route::get('user-settings', function () {
    return view('user-settings');
})->name('user-settings');

Route::get('user-wallet', function () {
    return view('user-wallet');
})->name('user-wallet');

Route::get('user-wishlist', function () {
    return view('user-wishlist');
})->name('user-wishlist');
