<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminLawyerController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminContactController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{article}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot');
Route::post('/chatbot/search', [ChatbotController::class, 'search'])->name('chatbot.search');

Route::post('/chat', [ChatController::class, 'store'])->name('chat');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Login Routes (tidak perlu auth)
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    
    // Protected Admin Routes (perlu auth dan admin middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        
        // CRUD Routes
        Route::resource('articles', AdminArticleController::class, ['as' => 'admin']);
        Route::resource('lawyers', AdminLawyerController::class, ['as' => 'admin']);
        Route::resource('services', AdminServiceController::class, ['as' => 'admin']);
        Route::get('contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
        Route::get('contacts/{id}', [AdminContactController::class, 'show'])->name('admin.contacts.show');
        Route::delete('contacts/{id}', [AdminContactController::class, 'destroy'])->name('admin.contacts.destroy');
    });
});
