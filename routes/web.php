<?php

use Illuminate\Support\Facades\Route;

// $action = $_REQUEST['action'];
// $action = ( array_key_exists( 'action', $_REQUEST) ? $_REQUEST['action'] : "" );

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

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', function () {
    return view('backend.dashboard');
})->name('home');

Route::get('/admin/languages', 'LanguageController@active_languages')->name('active_languages');

Route::namespace('backend')->group(function () {
// Route::namespace('backend')->group(['middleware' => 'role:developer'], function () {

    Route::get('/admin/roles', 'PermissionController@Permission');
    Route::get('/admin/dashboard', 'DashboardController@dashboard')->name('dashboard');
    // Route::get('/home', 'DashboardController@dashboard')->name('dashboard');

    // Controllers Within The "App\Http\Controllers\backend" Namespace
    // Index
    Route::get('/admin/index', 'IndexController@index')->name('index');
    Route::post('/admin/index/update', 'IndexController@index_update')->name('index_update');
    Route::get('/admin/index/sliders', 'IndexController@sliders')->name('sliders');
    Route::post('/admin/index/slider_update', 'IndexController@slider_update')->name('slider_update');
    Route::get('/admin/index/news', 'IndexController@news')->name('news');
    Route::post('/admin/index/news_update', 'IndexController@news_update')->name('news_update');
    // About
    Route::get('/admin/about_us', 'AboutUsController@aboutus')->name('about_us');
    Route::post('/admin/about_us/edit', 'AboutUsController@about_update')->name('about_us_edit');
    Route::get('/admin/about_us_team', 'AboutUsController@aboutus_team')->name('about_us_team');
    Route::post('/admin/about_us/about_update_team', 'AboutUsController@about_update_team')->name('about_update_team');
    // Services
    Route::get('/admin/services', 'ServicesController@services')->name('services');
    Route::post('/admin/services/edit', 'ServicesController@services_update')->name('services_edit');
    Route::get('/admin/services_testimonials', 'ServicesController@services_testimonials')->name('services_testimonials');
    Route::post('/admin/services_testimonials/edit', 'ServicesController@services_testimonials_update')->name('services_testimonials_edit');
    Route::get('/admin/services_we_do', 'ServicesController@services_we_do')->name('services_we_do');
    Route::post('/admin/services_we_do/edit', 'ServicesController@services_we_do_update')->name('services_we_do_edit');
    Route::get('/admin/services_featured', 'ServicesController@services_featured')->name('services_featured');
    Route::post('/admin/services_featured/edit', 'ServicesController@services_featured_update')->name('services_featured_edit');

    // Galleries
    Route::get('/admin/gallery', 'GalleryController@gallery')->name('gallery');
    Route::post('/admin/gallery/edit', 'GalleryController@gallery_update')->name('gallery_edit');

    Route::get('/admin/galleries', 'GalleryController@all_galleries')->name('all_galleries');

    // Contact
    Route::get('/admin/contact_us', 'ContactController@contact_us')->name('contact_us');
    Route::post('/admin/contact_us/edit', 'ContactController@contact_update')->name('contact_edit');

    Route::get('/admin/calendar', 'CalendarController@calendar')->name('calendar');
    Route::get('/admin/compressor', 'ImageController@imagecompressor')->name('imagecompressor');
    Route::get('/admin/languages', 'LanguageController@languages')->name('languages');
    Route::get('/admin/settings', 'SettingsController@settings')->name('settings');
    Route::get('/admin/search', 'SearchController@search')->name('search');
    Route::get('/admin/email', 'EmailController@email')->name('email');
    Route::get('/admin/ecommerce', 'ECommerceController@ecommerce')->name('ecommerce');
    Route::get('/admin/employee', 'EmployeeController@employee')->name('employee');
    Route::get('/admin/newsletter', 'NewsLetterController@newsletter')->name('newsletter');
    Route::post('/admin/uploadfile','OfficeReaderController@showUploadFile')->name('showUploadFile');

    // FAQ
    Route::get('/admin/faq', 'FAQController@faq')->name('faq');
    Route::post('/admin/faq_update', 'FAQController@faq_update')->name('faq_update');
    //  Privacy
    Route::get('/admin/privacy', 'PrivacyController@privacy')->name('privacy');
    Route::post('/admin/privacy_update', 'PrivacyController@privacy_update')->name('privacy_update');

    //  Start Settings
    Route::post('/admin/settings', 'SettingsController@general_settings')->name('general_settings');
    Route::post('/admin/settings', 'SettingsController@employee_settings')->name('employee_settings');
    Route::post('/admin/settings/return', 'SettingsController@employee_settings_return')->name('employee_settings_return');
    Route::post('/admin/settings/new_password', 'SettingsController@new_password')->name('new_password');
    Route::post('/admin/settings/invoice_settings', 'SettingsController@invoice_settings')->name('invoice_settings');
    Route::post('/admin/settings', 'SettingsController@smtp_settings')->name('smtp_settings');
    Route::post('/admin/settings', 'SettingsController@ftp_settings')->name('ftp_settings');
    Route::post('/admin/settings', 'SettingsController@social_network_settings')->name('social_network_settings');

    Route::post('/admin/settings/smtp_update', 'SettingsController@smtp_update')->name('smtp_update');
    Route::post('/admin/settings/ftp_update', 'SettingsController@ftp_update')->name('ftp_update');
    Route::post('/admin/settings/social_create', 'SettingsController@social_create')->name('social_create');
    Route::get('/admin/settings/social_update', 'SettingsController@social_update')->name('social_update');
    Route::get('/admin/settings/social_delete', 'SettingsController@social_delete')->name('social_delete');
});

Route::namespace('frontend')->group(function () {
    // Controllers Within The "App\Http\Controllers\frontend" Namespace
    Route::get('/', 'IndexController@index')->name('index');
    // Route::post('/admin/index/update', 'IndexController@index_update')->name('index_update'); // newsletter later
    Route::get('About', 'AboutController@about')->name('about');
    Route::get('Services', 'ServicesController@services')->name('services');
    Route::get('Gallery', 'GalleryController@gallery')->name('gallery');
    Route::get('Contact', 'ContactController@contact')->name('contact');

    // Extras
    Route::get('Icons', 'IconsController@icons')->name('icons');
    Route::get('Typography', 'TypographyController@typography')->name('typography');
});
