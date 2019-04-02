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

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
|
|
 */
Route::get('/', function () {
	return view(app()->getLocale() . '/accueil');
});
Route::get('/plandusite', function () {
	return view(app()->getLocale() . '/plandusite');
});
Route::get('/mentions-legales', function () {
	return view(app()->getLocale() . '/mentions-legales');
});

/*
|--------------------------------------------------------------------------
| FIVIAR
|--------------------------------------------------------------------------
|
|
 */

Route::get('/motdupresident', function () {
	return view(app()->getLocale() . '/motdupresident');
});
Route::get('/presentation', function () {
	return view(app()->getLocale() . '/presentation');
});
	/*Route::get('/conseildadministration', function () {
		return view(app()->getLocale() . '/conseildadministration');
	});*/
/*
|--------------------------------------------------------------------------
| SECTEUR VIANDES ROUGES
|--------------------------------------------------------------------------
|
|
 */
Route::get('/svr-presentation', function () {
	return view(app()->getLocale() . '/svr-presentation');
});
Route::get('/svr-strategie', function () {
	return view(app()->getLocale() . '/svr-strategie');
});
Route::get('/svr-galerie', 'GalerieController@ListSvrFiles');
/*
|--------------------------------------------------------------------------
| MERCURIALES
|--------------------------------------------------------------------------
|
|
 */
Route::get('/mercuriales', function () {
	return view(app()->getLocale() . '/mercuriales');
});
/*
|--------------------------------------------------------------------------
| ZOOPOLE
|--------------------------------------------------------------------------
|
|
 */
Route::get('/zoopole-presentation', function () {
	return view(app()->getLocale() . '/zoopole-presentation');
});
Route::get('/zoopole-galerie', 'GalerieController@ListZoopoleFiles');
/*
|--------------------------------------------------------------------------
| MAROCARN & MILK
|--------------------------------------------------------------------------
|
|
 */
Route::get('/marocarnmilk-presentation', function () {
	return view(app()->getLocale() . '/marocarnmilk-presentation');
});
Route::get('/marocarnmilk-galerie', 'GalerieController@ListMarocarnMilkFiles');
/*
|--------------------------------------------------------------------------
| BLOG
|--------------------------------------------------------------------------
|
|
 */

/*Route::get('/blog', function () {
return view(app()->getLocale() . '/blog');
});*/


Route::get('blog/{slug}', ['as' => 'single', 'uses' => 'BlogController@getSingle'])
	->where('slug', '[\w\d\-\_]+');

Route::get('/blog', 'BlogController@index');


Route::resources([
	'admin/posts' => 'PostController',
]);
Route::resources([
	'admin/users' => 'UserController',
]);
Route::resources([
	'admin/images' => 'ImageController',
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*
|--------------------------------------------------------------------------
| PRESSE
|--------------------------------------------------------------------------
|
|
 */
Route::get('/revue-de-presse', 'GalerieController@ListRevueDePresseFiles');
Route::get('/dossiers-de-presse', 'GalerieController@ListDossiersDePresseFiles');
Route::get('/filmsinstitutionnels', 'GalerieController@ListFilmsFiles');
Route::get('/reportages', 'GalerieController@ListReportagesFiles');
Route::get('/radios', 'GalerieController@ListRadiosFiles');
/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
|
|
 */
Route::get('/contact', function () {
	return view(app()->getLocale() . '/contact');
});
Route::post('/contact', 'EmailController@PostContact');

/*
|--------------------------------------------------------------------------
| ADMINISTRATION
|--------------------------------------------------------------------------
|
|
 */

/*
|--------------------------------------------------------------------------
| AUTHENTIFICATION
|--------------------------------------------------------------------------
|
|
 */

/*Auth::routes();*/

Route::get('/fivi@r/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('fivi@r/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('fivi@r/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('fivi@r/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('fivi@r/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('fivi@r/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('fivi@r/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('fivi@r/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('fivi@r/password/reset', 'Auth\ResetPasswordController@reset');

/*
|--------------------------------------------------------------------------
| LOCALIZATION
|--------------------------------------------------------------------------
|
|
 */

/*Route::get('locale', function () {
return \App::getLocale();
});*/

Route::get('locale/{locale}', function ($locale) {
	if ($locale == 'fr' || $locale == 'ar') {
		\Session::put('locale', $locale);
		return redirect()->back();
	} else {
		return redirect()->back();
	}
});

Route::get('blog/locale/{locale}', function ($locale) {
	if ($locale == 'fr' || $locale == 'ar') {
		\Session::put('locale', $locale);
		return redirect()->back();
	} else {
		return redirect()->back();
	}
});

/*
|--------------------------------------------------------------------------
| ERREUR 404
|--------------------------------------------------------------------------
|
|
 */

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);