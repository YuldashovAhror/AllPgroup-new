<?php

use App\Http\Controllers\Dashbaord\NewsToController;
use App\Http\Controllers\Dashbaord\ProjectToController;
use App\Http\Controllers\Dashbaord\ServiceToController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\CommentController;
use App\Http\Controllers\Dashboard\FeedbackController;
use App\Http\Controllers\Dashboard\MainSliderController;
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


        Route::get('dashboar/words', [WordController::class, 'index'])->name('words.index');
    });
});


require __DIR__.'/auth.php';
