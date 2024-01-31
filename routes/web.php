<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetadataController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/
Route::get('/', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/accessories', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/channel-letters', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/commercial-signage-types', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/custom-commercial-awnings', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/custom-neon-signs-led', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/dimensional', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/exterior-restaurant-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/floor-sidewalk-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/ground-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/interior-restaurant-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/parking-directional-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/restaurant-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/restaurant-directional-parking-signs', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/menu-boards', [MetadataController::class, 'getMeta']);
Route::get('/sign-products/wall-signs',[MetadataController::class, 'getMeta']);
Route::get('/quick-signs/vehicle-wraps-and-graphics', [MetadataController::class, 'getMeta']);
Route::get('/quick-signs/project-site-signs', [MetadataController::class, 'getMeta']);
Route::get('/quick-signs/real-estate-signs', [MetadataController::class, 'getMeta']);
Route::get('/quick-signs/vinyl-banners', [MetadataController::class, 'getMeta']);
Route::get('/quick-signs/yard-signs', [MetadataController::class, 'getMeta']);
Route::get('/our-company/about-us',[MetadataController::class, 'getMeta']);
Route::get('/our-company/faq', [MetadataController::class, 'getMeta']);
Route::get('/our-company/latest-news', [MetadataController::class, 'getMeta']);
Route::get('/our-company/our-work',[MetadataController::class, 'getMeta']);
Route::get('/our-company/sign-industry-news', [MetadataController::class, 'getMeta']);
Route::get('/employment', [MetadataController::class, 'getMeta']);
Route::get('/sign-price-quote', [MetadataController::class, 'getMeta']);
Route::post('/sign-price-quote', [FormController::class,'priceQuoteRequest'])->name('price-quote');
Route::get('/price-quote-neon-sign', [MetadataController::class, 'getMeta']);
Route::get('/contact-us', [MetadataController::class, 'getMeta']);
Route::post('/contact-us', [FormController::class, 'contactUs'])->name('contact-us');
Route::get('/awning-price-quote', [MetadataController::class, 'getMeta']);



/* Special routes for Restaurant Signs and its InfoGraphic Popup */
Route::get('/popup-restaurant-info-graphic', function(){
    return view('pages.popup-restaurant-info-graphic');
})->name('popup-restaurant-info-graphic');
Route::get('/infographics/awnings', function(){
    return view('pages.infographics.awnings');
});
Route::get('/infographics/banners', function(){
    return view('pages.infographics.banners');
});
Route::get('/infographics/channel-letters', function(){
    return view('pages.infographics.channel-letters');
});
Route::get('/infographics/directionals', function(){
    return view('pages.infographics.directionals');
});
Route::get('/infographics/menuboards', function(){
    return view('pages.infographics.menuboards');
});
Route::get('/infographics/neon-signs', function(){
    return view('pages.infographics.neon-signs');
});
Route::get('/infographics/parking-signs', function(){
    return view('pages.infographics.parking-signs');
});
Route::get('/infographics/presell-signs', function(){
    return view('pages.infographics.presell-signs');
});
Route::get('/infographics/pylon-signs', function(){
    return view('pages.infographics.pylon-signs');
});
Route::get('/infographics/sidewalk-signs', function(){
    return view('pages.infographics.sidewalk-signs');
});
Route::get('/infographics/wall-signs', function(){
    return view('pages.infographics.wall-signs');
});
Route::get('/infographics/window-graphics', function(){
    return view('pages.infographics.window-graphics');
});











/*for dev only, clear cache routes, etc*/
// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});