<?php

use App\Http\Controllers\Admin\ActivitiesController;
use App\Http\Controllers\Admin\ConnectionsController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LawsController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OpenItemsController;
use App\Http\Controllers\Admin\PhotosController;
use App\Http\Controllers\Admin\ProTeachingController;
use App\Http\Controllers\Admin\RegionalDepartsController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideosController;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::get('/', [\App\Http\Controllers\ResourceController::class, 'index'])->name('main');
    Route::get('/about', [\App\Http\Controllers\ManagementsController::class, 'about'])->name('about');
    Route::get('/activities', [\App\Http\Controllers\ManagementsController::class, 'activity'])->name('activity');
    Route::get('/leaders', [\App\Http\Controllers\TeamController::class, 'leader'])->name('leader');
    Route::get('/employees', [\App\Http\Controllers\TeamController::class, 'employee'])->name('employee');
    Route::get('/open-items', [\App\Http\Controllers\OpenItemController::class, 'open_item'])->name('front.openItems.open_item');
    Route::get('/news', [\App\Http\Controllers\NewController::class, 'all'])->name('front.news.index');
    Route::get('/news/{id}', [\App\Http\Controllers\NewController::class, 'show'])->name('front.news.show');
    Route::get('/photos', [\App\Http\Controllers\PhotoController::class, 'index'])->name('front.photo.index');
    Route::get('/videos', [\App\Http\Controllers\VideoController::class, 'index'])->name('front.video.index');
    Route::get('/connection', [\App\Http\Controllers\ConnectionController::class, 'index'])->name('front.connection.index');
    Route::get('/laws-of-republic-of-uzbekistan', [\App\Http\Controllers\LawController::class, 'lawsUZB'])->name('front.law.lawsUZB');
    Route::get('/decrees-and-resolutions-of-president', [\App\Http\Controllers\LawController::class, 'dr_president'])->name('front.law.dr_president');
    Route::get('/resolutions-of-cabinet-of-ministers', [\App\Http\Controllers\LawController::class, 'rc_minister'])->name('front.law.rc_minister');
    Route::get('/document', [\App\Http\Controllers\DocumentsController::class, 'document'])->name('front.document.index');
    Route::get('/pro-teaching', [\App\Http\Controllers\ProTeachingsController::class, 'index'])->name('front.pro_teaching.index');
    Route::get('/cities/{id}', [\App\Http\Controllers\CityController::class, 'getById'])->name('city.getById');
    Route::get('/cities', [\App\Http\Controllers\CityController::class, 'all'])->name('front.regional_departs.index');

});

Auth::routes();

Route::middleware(['auth:web'])->group(function () {

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::post('/connection', [ConnectionsController::class, 'connect'])->name('connect');
        Route::get('/connections', [ConnectionsController::class, 'get'])->name('get.connection');
        Route::delete('/connections/{id}', [ConnectionsController::class, 'destroy'])->name('connections.destroy');

        Route::resources([
            'management'  => ManagementController::class,
            'activities'  => ActivitiesController::class,
            'users'  => UserController::class,
            'news'   => NewsController::class,
            'photos' => PhotosController::class,
            'videos' => VideosController::class,
            'teams'  => TeamsController::class,
            'openItems' => OpenItemsController::class,
            'professional-teaching' => ProTeachingController::class,
            'documents' => DocumentController::class,
            'laws' => LawsController::class,
            'regional-departs' => RegionalDepartsController::class,
        ]);

        Route::post('/photos/photo-upload/{id}', [PhotosController::class, 'photoUpload'])->name('PhotosPhotoUpload');
        Route::delete('/photos/photo-delete/{id}', [PhotosController::class, 'deletePhoto'])->name('PhotosPhotoDelete');

    });
});
