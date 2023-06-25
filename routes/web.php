<?php

use App\Http\Controllers\Dashbaord\NewsToController;
use App\Http\Controllers\Dashbaord\ProjectToController;
use App\Http\Controllers\Dashbaord\ServiceToController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\CommentController;
use App\Http\Controllers\Dashboard\FeedbackController;
use App\Http\Controllers\Dashboard\MainSliderController;
use App\Http\Controllers\Dashboard\MetategController;
use App\Http\Controllers\Dashboard\NewCategoryController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\NewsToController as DashboardNewsToController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\ProjectToController as DashboardProjectToController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\ServiceToController as DashboardServiceToController;
use App\Http\Controllers\Dashboard\StorieController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\UseProjectController;
use App\Http\Controllers\Dashboard\VacancyController;
use App\Http\Controllers\Dashboard\WordController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FeedbackController as FrontFeedbackController;
use App\Http\Controllers\Front\NewsController as FrontNewsController;
use App\Http\Controllers\Front\ProjectController as FrontProjectController;
use App\Http\Controllers\Front\ServiceController as FrontServiceController;
use Illuminate\Support\Facades\Route;

//Localization
// Route::get('/ru', function () {
//     session()->put('locale', 'ru');
//     return redirect()->back();
// })->name('languages');
// Route::get('/uz', function () {
//         session()->put('locale', 'uz');
//         return redirect()->back();
// })->name('languages');

Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['en', 'ru', 'uz'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});

//Front
Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('main');
Route::resource('news', FrontNewsController::class);
Route::resource('/service', FrontServiceController::class);
Route::resource('project', FrontProjectController::class);
Route::resource('about', AboutController::class);
Route::post('feedback/store', [FrontFeedbackController::class, 'store'])->name('front.feedback.store');
Route::resource('/contact', ContactController::class);
Route::get('/optimize', function (){
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('route:cache');
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('migrate');
    return 'success';
});


//Dashboard
Route::group(['prefix' => 'dashboard'], function (){
    Route::name('dashboard.')->group(function (){

        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
        Route::resource('/mainslider', MainSliderController::class);
        Route::resource('/Service', ServiceController::class);
        Route::resource('/useproject', UseProjectController::class);
        Route::resource('/project', ProjectController::class);
        Route::resource('/comment', CommentController::class);
        Route::resource('/newcategory', NewCategoryController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/storie', StorieController::class);
        Route::resource('/team', TeamController::class);

        Route::resource('/feedback', FeedbackController::class);
        Route::resource('/client', ClientController::class);
        // Route::resource('/feedback', FeedbackController::class);
        Route::resource('/vacancy', VacancyController::class);
        Route::resource('/projectto', DashboardProjectToController::class);
        Route::resource('/newsto', DashboardNewsToController::class);
        Route::resource('/serviceto', DashboardServiceToController::class);
        Route::get('/homemetateg', [MetategController::class, 'index'])->name('homemetateg');
        Route::put('/homemetateg/{id}', [MetategController::class, 'update'])->name('homemetateg.update');
        Route::put('/aboutmetateg/{id}', [MetategController::class, 'aboute'])->name('aboutmetateg.update');
        Route::put('/servicemetateg/{id}', [MetategController::class, 'service'])->name('servicemetateg.update');
        Route::put('/projectmetateg/{id}', [MetategController::class, 'project'])->name('projectmetateg.update');
        Route::put('/newsmetateg/{id}', [MetategController::class, 'news'])->name('newsmetateg.update');
        Route::put('/contactmetateg/{id}', [MetategController::class, 'contact'])->name('contactmetateg.update');

        Route::get('dashboar/words', [WordController::class, 'index'])->name('words.index');
    });
});


require __DIR__.'/auth.php';
