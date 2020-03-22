<?php

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
//

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/test', function() {

	    return '<h1>test</h1>';
	});

});

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});


Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Route cache cleared</h1>';
});


Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});


Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/', 'MainController@Main');
Route::get('/About-us', 'AboutController@show');
Route::get('/Our-Portfolio/{portfolio}', 'PortfolioController@show');
Route::get('/Department/{departmentImage}','DepartmentImageController@showSlider');



Route::get('/Our-Studio/{studio}', 'StudioController@show');
Route::get('/Our-News', 'NewsController@showAll');
Route::get('/Our-News/{news}', 'NewsController@show');
Route::group(['middleware' => 'is_admin'], function () {

Route::get('/home', 'HomeController@index')->name('admin');

  Route::get('/admin', function () {
      return view('admin.index');
  });

  Route::get('/Admin-Edit', 'HomeController@AdminEdit');
  Route::post('/Admin-Update/{admin}', 'HomeController@AdminUpdate');
// ------------------------------------------------------------
Route::get('/Portfolio-Show', 'PortfolioController@index')->name('portfolio');
// Route::get('/Portfolio-New', 'PortfolioController@create');
Route::post('/Portfolio-Add', 'PortfolioController@store');
Route::post('/Portfolio-Update/{portfolio}', 'PortfolioController@update');
Route::get('/Portfolio-Delete/{portfolio}', 'PortfolioController@destroy');
// -------------------------------------------------------------

Route::get('/Portfolio-About', 'PortfolioAboutController@index')->name('portfolio-about');
Route::post('/Portfolio-About-Add', 'PortfolioAboutController@store');
Route::get('/Portfolio-About-Edit/{portfolioAbout}', 'PortfolioAboutController@edit');
Route::post('/Portfolio-About-Update/{portfolioAbout}', 'PortfolioAboutController@update');
Route::get('/Portfolio-About-Delete/{portfolioAbout}', 'PortfolioAboutController@destroy');

// -------------------------------------------------------------
Route::get('/Portfolio-Images', 'PortfolioImageController@index')->name('portfolio-images');
Route::post('/Portfolio-Images-Add', 'PortfolioImageController@store');
Route::get('/Portfolio-Images-Edit/{portfolioImage}', 'PortfolioImageController@edit');
Route::post('/Portfolio-Images-Update/{portfolioImage}', 'PortfolioImageController@update');
Route::get('/Portfolio-Images-Delete/{portfolioImage}', 'PortfolioImageController@destroy');

// -------------------------------------------------------------
// 963ad
// ------------------------------------------------------------
Route::get('/AdPortfolio-Show', 'AdPortfolioController@index')->name('AdPortfolio');
// Route::get('/Portfolio-New', 'PortfolioController@create');
Route::post('/AdPortfolio-Add', 'AdPortfolioController@store');
Route::post('/AdPortfolio-Update/{adPortfolio}', 'AdPortfolioController@update');
Route::get('/AdPortfolio-Delete/{adPortfolio}', 'AdPortfolioController@destroy');
// -------------------------------------------------------------
Route::get('/AdPortfolio-Images', 'AdPortfolioImageController@index')->name('adPortfolio-images');
Route::post('/AdPortfolio-Images-Add', 'AdPortfolioImageController@store');
Route::get('/AdPortfolio-Images-Edit/{adPortfolioImage}', 'AdPortfolioImageController@edit');
Route::post('/AdPortfolio-Images-Update/{adPortfolioImage}', 'AdPortfolioImageController@update');
Route::get('/AdPortfolio-Images-Delete/{adPortfolioImage}', 'AdPortfolioImageController@destroy');
// -------------------------------------------------------------

// -------------------------------------------------------------
Route::get('/Department-All', 'DepartmentController@index')->name('department');
Route::get('/Department-New', 'DepartmentController@create');
Route::post('/Department-Add', 'DepartmentController@store');
Route::get('/Department-Edit/{department}', 'DepartmentController@edit');
Route::post('/Department-Update/{department}', 'DepartmentController@update');
Route::get('/Department-Delete/{department}', 'DepartmentController@destroy');

// -------------------------------------------------------------

Route::get('/Department-Images', 'DepartmentImageController@index')->name('department-images');
Route::post('/Department-Images-Add', 'DepartmentImageController@store');
Route::get('/Department-Images-Edit/{departmentImage}', 'DepartmentImageController@edit');
Route::post('/Department-Images-Update/{departmentImage}', 'DepartmentImageController@update');
Route::get('/Department-Images-Delete/{departmentImage}', 'DepartmentImageController@destroy');

// -------------------------------------------------------------

Route::get('/Sketch-All', 'SketchController@index')->name('sketch');
Route::post('/Sketch-Add', 'SketchController@store');
Route::get('/Sketch-Edit/{sketch}', 'SketchController@edit');
Route::post('/Sketch-Update/{sketch}', 'SketchController@update');
Route::get('/Sketch-Delete/{sketch}', 'SketchController@destroy');

// -------------------------------------------------------------

Route::get('/Service-All', 'ServiceController@index')->name('Service');
Route::post('/Service-Add', 'ServiceController@store');
Route::get('/Service-Edit/{service}', 'ServiceController@edit');
Route::post('/Service-Update/{service}', 'ServiceController@update');
Route::get('/Service-Delete/{service}', 'ServiceController@destroy');

// -------------------------------------------------------------

Route::get('/Testimonial-All', 'TestimonialController@index')->name('Testimonial');
Route::get('/Testimonial-New', 'TestimonialController@create');
Route::post('/Testimonial-Add', 'TestimonialController@store');
Route::get('/Testimonial-Edit/{testimonial}', 'TestimonialController@edit');
Route::post('/Testimonial-Update/{testimonial}', 'TestimonialController@update');
Route::get('/Testimonial-Delete/{testimonial}', 'TestimonialController@destroy');

// -------------------------------------------------------------

Route::get('/Client-All', 'ClientController@index')->name('Client');
// Route::get('/Client-New', 'TestimonialController@create');
Route::post('/Client-Add', 'ClientController@store');
Route::get('/Client-Edit/{client}', 'ClientController@edit');
Route::post('/Client-Update/{client}', 'ClientController@update');
Route::get('/Client-Delete/{client}', 'ClientController@destroy');

// -------------------------------------------------------------
Route::get('/News-All', 'NewsController@index')->name('News');
Route::get('/News-New', 'NewsController@create');
Route::post('/News-Add', 'NewsController@store');
Route::get('/News-Edit/{news}', 'NewsController@edit');
Route::post('/News-Update/{news}', 'NewsController@update');
Route::get('/News-Delete/{news}', 'NewsController@destroy');

// -------------------------------------------------------------
Route::get('/SiteMap-All', 'SiteMapController@index')->name('SiteMap');
Route::post('/SiteMap-Add', 'SiteMapController@store');
Route::post('/SiteMap-Update/{siteMap}', 'SiteMapController@update');
Route::get('/SiteMap-Delete/{siteMap}', 'SiteMapController@destroy');
// -------------------------------------------------------------
Route::get('/ContactInfo-All', 'ContactInfoController@index')->name('ContactInfo');
Route::post('/ContactInfo-Add', 'ContactInfoController@store');
Route::post('/ContactInfo-Update/{contactInfo}', 'ContactInfoController@update');
Route::get('/ContactInfo-Edit/{contactInfo}', 'ContactInfoController@edit');
Route::get('/ContactInfo-Delete/{contactInfo}', 'ContactInfoController@destroy');
// -------------------------------------------------------------
Route::get('/ContactInfo-All', 'ContactInfoController@index')->name('ContactInfo');
Route::post('/ContactInfo-Add', 'ContactInfoController@store');
Route::post('/ContactInfo-Update/{contactInfo}', 'ContactInfoController@update');
Route::get('/ContactInfo-Edit/{contactInfo}', 'ContactInfoController@edit');
Route::get('/ContactInfo-Delete/{contactInfo}', 'ContactInfoController@destroy');
// -------------------------------------------------------------
Route::get('/WeAre-All', 'WeAreController@index')->name('WeAre');
Route::post('/WeAre-Add', 'WeAreController@store');
Route::post('/WeAre-Update/{weAre}', 'WeAreController@update');
Route::get('/WeAre-Edit/{weAre}', 'WeAreController@edit');
Route::get('/WeAre-Delete/{weAre}', 'WeAreController@destroy');
// -------------------------------------------------------------
Route::get('/Studio-All', 'StudioController@index')->name('Studio');
Route::get('/Studio-New', 'StudioController@create');
Route::post('/Studio-Add', 'StudioController@store');
Route::get('/Studio-Edit/{studio}', 'StudioController@edit');
Route::post('/Studio-Update/{studio}', 'StudioController@update');
Route::get('/Studio-Delete/{studio}', 'StudioController@destroy');

// -------------------------------------------------------------
Route::get('/Studio-About', 'StudioAboutController@index')->name('StudioAbout');
Route::post('/Studio-About-Add', 'StudioAboutController@store');
Route::get('/Studio-About-Edit/{studioAbout}', 'StudioAboutController@edit');
Route::post('/Studio-About-Update/{studioAbout}', 'StudioAboutController@update');
Route::get('/Studio-About-Delete/{studioAbout}', 'StudioAboutController@destroy');

// -------------------------------------------------------------
Route::get('/StudioPortfolio', 'StudioPortfolioController@index')->name('StudioPortfolio');
Route::post('/StudioPortfolio-Add', 'StudioPortfolioController@store');
Route::get('/StudioPortfolio-Edit/{studioPortfolio}', 'StudioPortfolioController@edit');
Route::post('/StudioPortfolio-Update/{studioPortfolio}', 'StudioPortfolioController@update');
Route::get('/StudioPortfolio-Delete/{studioPortfolio}', 'StudioPortfolioController@destroy');
// -------------------------------------------------------------

Route::get('/About', 'AboutController@index')->name('About');
Route::get('/About-New', 'AboutController@create');
Route::post('/About-Add', 'AboutController@store');
Route::get('/About-Edit/{about}', 'AboutController@edit');
Route::post('/About-Update/{about}', 'AboutController@update');
Route::get('/About-Delete/{about}', 'AboutController@destroy');

// -------------------------------------------------------------
Route::get('/Timeline', 'TimelineController@index')->name('Timeline');
Route::post('/Timeline-Add', 'TimelineController@store');
Route::get('/Timeline-Edit/{timeline}', 'TimelineController@edit');
Route::post('/Timeline-Update/{timeline}', 'TimelineController@update');
Route::get('/Timeline-Delete/{timeline}', 'TimelineController@destroy');

// -------------------------------------------------------------

Route::get('/Team-All', 'TeamController@index')->name('Team');
// Route::get('/Client-New', 'TestimonialController@create');
Route::post('/Team-Add', 'TeamController@store');
Route::get('/Team-Edit/{team}', 'TeamController@edit');
Route::post('/Team-Update/{team}', 'TeamController@update');
Route::get('/Team-Delete/{team}', 'TeamController@destroy');

// -------------------------------------------------------------

Route::get('/Counter-All', 'CounterController@index')->name('Counter');
Route::post('/Counter-Add', 'CounterController@store');
Route::get('/Counter-Edit/{counter}', 'CounterController@edit');
Route::post('/Counter-Update/{counter}', 'CounterController@update');
Route::get('/Counter-Delete/{counter}', 'CounterController@destroy');

// -------------------------------------------------------------
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
