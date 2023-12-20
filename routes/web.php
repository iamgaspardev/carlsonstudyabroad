<?php
use Illuminate\Support\Facades\Auth;

use App\Http\Livewire\Admin\AdminNewsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\SuccessComponent;
use App\Http\Livewire\DonationComponent;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminPostsComponent;
use App\Http\Livewire\Admin\AdminAddPostsComponent;
use App\Http\Livewire\Admin\AdminAddNewsComponent;
use App\Http\Livewire\Admin\Application;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Apply;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',HomeComponent::class);
Route::get('/info',AboutComponent::class);
Route::get('/contact',ContactComponent::class);
Route::get('/news',NewsComponent::class);
Route::get('/success',SuccessComponent::class);
Route::get('/apply',Apply::class)->name('apply.user');
Route::get('/description',DonationComponent::class);
Route::get('/send/email',[EmailController::class,'Emailsend'])->name('send.emails');

//admin middleware
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/uploads',AdminPostsComponent::class)->name('admin.posts');
    Route::get('/admin/news',AdminNewsComponent::class)->name('admin.news');
    Route::get('/admin/application',Application::class)->name('admin.application');
    Route::get('/admin/add/post',AdminAddPostsComponent::class)->name('admin.add.posts');
    Route::get('/admin/add/news',AdminAddNewsComponent::class)->name('admin.add.news');
});