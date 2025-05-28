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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home'); // you are logged in

// Route::get('/home', function () {
//         // these not working   
//         // $latest_male_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->where('bn', 'like', 'M')->get();
//         // $latest_female_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->where('bn', 'like', 'W')->get();
//         // $latest_coffee_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->where('bn', 'like', 'D')->get();

//         $latest_male_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->get();
//         $latest_female_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->get();
//         $latest_coffee_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->get();
//         return view('backend.dashboard', compact('latest_male_products', 'latest_female_products', 'latest_coffee_products'));

//     // return redirect()->route('/backend/DashboardController@dashboard');
//     // return view('backend.dashboard');
//     // Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
// });

// Route::get('/home', function () {
//         $getLooka = DB::table('cpp_shop_order')->where('itemtui', 1)->orWhere('iftui', 0)->orWhere('clicktuipos', 0)->orWhere('orderid', '>', '5297')->count();
//         $getLookb = DB::table('cpp_shop_order')->where('ifyun', 0)->orWhere('iftui', 0)->orWhere('orderid', '>', '5297')->count();
//         $getLookc = DB::table('cpp_shop_order')->where('ifpay', 0)->orWhere('iftui', 0)->orWhere('ifok', 0)->orWhere('orderid', '>', '5297')->count();
//         // these not working   
//         // $latest_male_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->where('bn', 'like', 'M')->get();
//         // $latest_female_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->where('bn', 'like', 'W')->get();
//         // $latest_coffee_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->where('bn', 'like', 'D')->get();

//         $latest_male_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->get();
//         $latest_female_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->get();
//         $latest_coffee_products = DB::table('cpp_shop_additems')->orderByDesc('dtime')->limit(3)->get();
//         return view('backend.dashboard', compact('latest_male_products', 'latest_female_products', 'latest_coffee_products', 'getLooka', 'getLookb', 'getLookc'));

//     // return redirect()->route('/backend/DashboardController@dashboard');
//     // return view('backend.dashboard');
//     // Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
// });


Route::get('/home', function () {
        // Dashboard Products
        // $getLooka = DB::table('cpp_shop_order')->where('itemtui', 1)->orWhere('iftui', 0)->orWhere('clicktuipos', 0)->orWhere('orderid', '>', '5297')->count();
        // $getLookb = DB::table('cpp_shop_order')->where('ifyun', 0)->orWhere('iftui', 0)->orWhere('orderid', '>', '5297')->count();
        // $getLookc = DB::table('cpp_shop_order')->where('ifpay', 0)->orWhere('iftui', 0)->orWhere('ifok', 0)->orWhere('orderid', '>', '5297')->count();
        // // Slider Products
        // $latest_male_products_first = DB::table('cpp_shop_additems')->where('bn', 'like', '%M%')->orderByDesc('id')->limit(1)->get();
        // $latest_male_products_rest = DB::table('cpp_shop_additems')->where('bn', 'like', '%M%')->orderByDesc('id')->skip(1)->take(2)->limit(2)->get();
        // $latest_female_products_first = DB::table('cpp_shop_additems')->where('bn', 'like', '%W%')->orderByDesc('id')->limit(1)->get();
        // $latest_female_products_rest = DB::table('cpp_shop_additems')->where('bn', 'like', '%W%')->orderByDesc('id')->skip(1)->take(2)->limit(2)->get();
        // $latest_coffee_product_first = DB::table('cpp_shop_con')->where('bn', 'like', '%DNY%')->orderByDesc('id')->limit(1)->get();
        // $latest_coffee_product_rest = DB::table('cpp_shop_con')->where('bn', 'like', '%DNY%')->orderByDesc('id')->skip(1)->take(2)->limit(2)->get();
        // // Languages
        // $default_langs = DB::table('lang')->where('default_lang', '!=', '')->limit(1)->get();
        // $active_langs = DB::table('lang')->whereRaw("active_lang = 'yes' AND default_lang = '' ")->get();
        // // Notifications
        // $order_notifications = DB::table('cpp_shop_orderitems')->orderByDesc('dtime')->limit(3)->get();
        // return view('backend.dashboard', compact('latest_male_products_first','latest_male_products_rest','latest_female_products_first','latest_female_products_rest','latest_coffee_product_first', 'latest_coffee_product_rest', 'getLooka', 'getLookb', 'getLookc', 'default_langs', 'active_langs', 'order_notifications'));

    // return redirect()->route('/backend/DashboardController@dashboard');
    return view('backend.dashboard');
    // Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
});



// Temporary
// Route::get('/home', function () {
//     return view('home');
// });



// middleware example
// Route::group(['middleware' => 'role:developer'], function() {

//    Route::get('/admin', function() {

//       return 'Welcome Admin';
      
//    });

// });

// Route::get('/roles', 'backend\PermissionController@Permission');


Route::get('/admin/languages', 'LanguageController@active_languages')->name('active_languages');

Route::namespace('backend')->group(function () {
// Route::namespace('backend')->group(['middleware' => 'role:developer'], function () {

    Route::get('/admin/roles', 'PermissionController@Permission');
    Route::get('/admin/dashboard', 'DashboardController@dashboard')->name('dashboard');

    // Controllers Within The "App\Http\Controllers\backend" Namespace
    Route::get('/admin/about_us', 'AboutUsController@aboutus')->name('about_us');
    Route::get('/admin/calendar', 'CalendarController@calendar')->name('calendar');
    Route::get('/admin/excelreader', 'ExcelController@excelreader')->name('excelreader');
    Route::get('/admin/compressor', 'ImageController@imagecompressor')->name('imagecompressor');
    Route::get('/admin/languages', 'LanguageController@languages')->name('languages');
    Route::get('/admin/settings', 'SettingsController@settings')->name('settings');
    Route::get('/admin/search', 'SearchController@search')->name('search');
    Route::get('/admin/email', 'EmailController@email')->name('email');
    Route::get('/admin/ecommerce', 'ECommerceController@ecommerce')->name('ecommerce');
    Route::get('/admin/employee', 'EmployeeController@employee')->name('employee');
    Route::get('/admin/newsletter', 'NewsLetterController@newsletter')->name('newsletter');
    Route::get('/admin/officereader', 'OfficeReaderController@office_reader')->name('office_reader');
    Route::post('/admin/uploadfile','OfficeReaderController@showUploadFile')->name('showUploadFile');

    //  FAQ
    Route::get('/admin/faq', 'FAQController@faq')->name('faq');
    Route::post('/admin/faq_update', 'FAQController@faq_update')->name('faq_update');
    //  Privacy
    Route::get('/admin/privacy', 'PrivacyController@privacy')->name('privacy');
    Route::post('/admin/privacy_update', 'PrivacyController@privacy_update')->name('privacy_update');
    //  Our Thinking
    Route::get('/admin/our_thinking', 'OurThinkingController@our_thinking')->name('our_thinking');
    Route::post('/admin/our_thinking_update', 'OurThinkingController@our_thinking_update')->name('our_thinking_update');
    //  Why Rema Founded
    Route::get('/admin/rema_founded', 'RemaFoundedController@rema_founded')->name('rema_founded');
    Route::post('/admin/rema_founded_update', 'RemaFoundedController@rema_founded_update')->name('rema_founded_update');
    //  Why Rema Founded
    Route::get('/admin/our_history', 'OurHistoryController@our_history')->name('our_history');
    Route::post('/admin/our_history_update', 'OurHistoryController@our_history_update')->name('our_history_update');

    //  Our Locations/Regional
    Route::get('/admin/our_locations', 'OurLocationsController@our_locations')->name('our_locations');
    Route::post('/admin/our_locations_update', 'OurLocationsController@our_locations_update')->name('our_locations_update');

    //  Products
    Route::get('/admin/products', 'ProductsController@allproducts')->name('allproducts');
    Route::get('/admin/products/new', 'ProductsController@new')->name('product/new');
    Route::get('/admin/products/{id}', 'ProductsController@show')->name('product/view');
    Route::post('/admin/products/create', 'ProductsController@store')->name('product/save');
    Route::put('/admin/products/edit/{id}', 'ProductsController@update')->name('product/edit');
    Route::delete('/admin/products/delete/{id}', 'ProductsController@delete')->name('product/delete');
    Route::post('/target-url/', 'ProductsController@top_slides')->name('top_slides');

    //  Orders
    Route::get('/admin/orders', 'OrdersController@allorders')->name('allorders');
    Route::get('/admin/orders/new', 'OrdersController@new')->name('order/new');
    Route::get('/admin/orders/{id}', 'OrdersController@show')->name('order/view');
    Route::post('/admin/orders/create', 'OrdersController@store')->name('order/save');
    Route::put('/admin/orders/edit/{id}', 'OrdersController@update')->name('order/edit');
    Route::delete('/admin/orders/delete/{id}', 'OrdersController@delete')->name('order/delete');
    Route::get('/admin/print_invoice/{id}', 'OrdersController@print_invoice')->name('order/print_invoice');
    Route::get('/admin/print_receipt/{id}', 'OrdersController@print_receipt')->name('order/print_receipt');
    Route::get('/admin/order_statistics/', 'OrdersController@order_statistics')->name('order_statistics');
    Route::get('/admin/payment_methods/', 'OrdersController@payment_methods')->name('payment_methods');
    Route::get('/admin/view_payment_method/{id}', 'OrdersController@view_payment_method')->name('view_payment_method');
    // Route::post('/admin/new_payment_method', 'OrdersController@new_payment_method')->name('new_payment_method');
    Route::get('/admin/delivery_methods/', 'OrdersController@delivery_methods')->name('delivery_methods');
    Route::get('/admin/coupons/', 'OrdersController@all_coupons')->name('all_coupons');
    Route::get('/admin/non_returns/', 'OrdersController@non_returns')->name('non_returns');
    Route::get('/admin/order_returns/', 'OrdersController@order_returns')->name('order_returns');
    Route::get('/admin/delivery_settings/', 'OrdersController@delivery_settings')->name('delivery_settings');
    Route::get('/admin/orders_search/', 'OrdersController@order_search')->name('order_search');
    Route::get('/admin/shipping_steps/', 'OrdersController@shipping_steps')->name('shipping_steps');


    //  Currency
    Route::get('/admin/currency', 'CurrencyController@allcurrency')->name('allcurrency');
    Route::get('/admin/currency/new', 'CurrencyController@new')->name('currency/new');
    Route::get('/admin/currency/{id}', 'CurrencyController@show')->name('currency/view');
    Route::post('/admin/currency/create', 'CurrencyController@store')->name('currency/save');
    Route::put('/admin/currency/edit/{id}', 'CurrencyController@update')->name('currency/edit');
    Route::delete('/admin/currency/delete/{id}', 'CurrencyController@delete')->name('currency/delete');

    //  Members
    Route::get('/admin/members', 'MembersController@allmember')->name('allmember');
    Route::get('/admin/member/new', 'MembersController@new')->name('member/new');
    Route::get('/admin/member/{id}', 'MembersController@show')->name('member/view');
    Route::post('/admin/member/create', 'MembersController@store')->name('member/save');
    Route::put('/admin/member/edit/{id}', 'MembersController@update')->name('member/edit');
    Route::delete('/admin/member/delete/{id}', 'MembersController@delete')->name('member/delete');
    Route::get('/admin/members/member_types', 'MembersController@member_types')->name('member_types');

    //  Newsletters
    Route::get('/admin/newsletter', 'NewsletterController@all_newsletters')->name('allnewsletter');
    Route::get('/admin/newsletter/new', 'NewsletterController@newsletter_new')->name('newsletter_new');
    Route::get('/admin/newsletter/{id}', 'NewsletterController@view_newsletter')->name('newsletter/view');
    Route::post('/admin/newsletter_update', 'NewsletterController@newsletter_update')->name('newsletter_update');
    Route::get('/admin/subscribers', 'NewsletterController@all_subscribers')->name('allsubscribers');
    Route::get('/admin/module_settings', 'NewsletterController@module_settings')->name('module_settings');
    Route::get('/admin/batch_mailing', 'NewsletterController@batch_mailing')->name('batch_mailing');

    // Route::get('/admin/newsletter/new', 'NewsletterController@new')->name('newsletter/new');
    // Route::get('/admin/newsletter/{id}', 'NewsletterController@show')->name('newsletter/view');
    // Route::post('/admin/newsletter/create', 'NewsletterController@store')->name('newsletter/save');
    // Route::put('/admin/newsletter/edit/{id}', 'NewsletterController@update')->name('newsletter/edit');
    // Route::delete('/admin/newsletter/delete/{id}', 'NewsletterController@delete')->name('newsletter/delete');


    //  Settings
    Route::post('/admin/settings', 'SettingsController@general_settings')->name('general_settings');
    Route::post('/admin/settings', 'SettingsController@employee_settings')->name('employee_settings');
    Route::post('/admin/settings/return', 'SettingsController@employee_settings_return')->name('employee_settings_return');
    Route::post('/admin/settings/new_password', 'SettingsController@new_password')->name('new_password');
    Route::post('/admin/settings/invoice_settings', 'SettingsController@invoice_settings')->name('invoice_settings');


    // Route::post('/admin/settings', 'SettingsController@smtp_settings')->name('smtp_settings');
    // Route::post('/admin/settings', 'SettingsController@ftp_settings')->name('ftp_settings');
    // Route::post('/admin/settings', 'SettingsController@social_network_settings')->name('social_network_settings');

    // Route::get('/admin/settings', 'SettingsController@allproducts')->name('allproducts');
    // Route::get('/admin/products/new', 'SettingsController@new')->name('settings/new');
    // Route::get('/admin/products/{id}', 'SettingsController@show')->name('settings/view');
    // Route::post('/admin/products/create', 'SettingsController@store')->name('settings/save');
    // Route::put('/admin/products/edit/{id}', 'SettingsController@update')->name('settings/edit');
    // Route::delete('/admin/products/delete/{id}', 'SettingsController@delete')->name('settings/delete');

    
    Route::get('/admin/auto_mail', 'AutoMailController@auto_mail')->name('auto_mail');
    Route::post('/admin/auto_mail_update', 'AutoMailController@auto_mail_update')->name('auto_mail_update');

    //  Install System
    Route::get('/admin/install_shop', 'InstallController@install_shop')->name('install_shop');
    Route::get('/admin/install_feedback', 'InstallController@install_feedback')->name('install_feedback');
    Route::get('/admin/install_member', 'InstallController@install_member')->name('install_member');
    Route::get('/admin/install_paper', 'InstallController@install_paper')->name('install_paper');
    Route::get('/admin/install_news', 'InstallController@install_news')->name('install_news');
    Route::get('/admin/insert_old_data_one', 'InstallController@insert_old_data_one')->name('insert_old_data_one');
    Route::get('/admin/insert_old_data_two', 'InstallController@insert_old_data_two')->name('insert_old_data_two');

    //  LOG API Controller
    Route::get('/admin/log_api', 'LogAPIController@view_api')->name('view_api');
    // Route::get('/admin/log_api', 'LogAPIController@index')->name('index');
    // Route::post('/admin/auto_mail_update', 'LogAPIController@auto_mail_update')->name('auto_mail_update'); // me
    Route::get('customer', 'api\CustomerController@index');
    Route::get('customer/{userInfo}', 'api\CustomerController@show');
    Route::post('customer', 'api\CustomerController@store');
    Route::put('customer/{userInfo}', 'api\CustomerController@update');
    Route::delete('customer/{userInfo}', 'api\CustomerController@destroy');
    // Route::apiResource('customer', 'api\CustomerController');
    //訂單
    Route::get('sel_order', 'api\CustomerController@sel_order');
    Route::get('cre_order', 'api\CustomerController@cre_order');
    Route::get('upd_order', 'api\CustomerController@upd_order');
    Route::get('upd_order_complete', 'api\CustomerController@upd_order_complete');
    Route::get('get_order_note', 'api\CustomerController@get_order_note');
    Route::get('upd_order_cancel', 'api\CustomerController@upd_order_cancel');
    //會員
    Route::get('cre_member', 'api\CustomerController@cre_member');
    Route::get('cre_member_one', 'api\CustomerController@cre_member_one');
    //庫存量
    Route::get('get_stock', 'api\CustomerController@get_stock');
    Route::get('get_stock_one', 'api\CustomerController@get_stock_one');
    Route::get('get_stock_api', 'api\CustomerController@get_stock_api');
    //API Log紀錄
    Route::get('api_view' , 'api\ApiViewController@index');
    //建立會員API
    Route::post('add_user','api\AddUserController@index');
    Route::get('update','api\AddUserController@update');
    // Route::get('sendMail','api\CustomerController@sendMail');
    Route::get('sendMail','api\LogAPIController@sendMail');

    // for future additions
    // Route::get('/admin/global_seo', 'EmailController@global_seo')->name('global_seo');
    // Route::get('/admin/ads', 'EmailController@ads')->name('ads'); // google ads

    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

    // Employee Section
    Route::post('/admin/employee/new', 'EmployeeController@addnew_employee')->name('addnew_employee');
    Route::post('/admin/employee/update', 'EmployeeController@update_employee')->name('update_employee');

    //  START ARTICLES
    Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
    });
     
    Route::get('articles/{id}', function($id) {
        return Article::find($id);
    });

    Route::post('articles', function(Request $request) {
        return Article::create($request->all);
    });

    Route::put('articles/{id}', function(Request $request, $id) {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    });

    Route::delete('articles/{id}', function($id) {
        Article::find($id)->delete();

        return 204;
    });

    Route::get('/admin/articles', 'ArticleController@index');
    Route::get('/admin/articles/new', 'ArticleController@new')->name('article/new');
    Route::get('/admin/articles/{id}', 'ArticleController@show')->name('article/view');
    Route::post('/admin/articles/create', 'ArticleController@store')->name('article/save');
    Route::put('/admin/articles/edit/{id}', 'ArticleController@update')->name('article/edit');
    Route::delete('/admin/articles/delete/{id}', 'ArticleController@delete')->name('article/delete');
    //  END ARTICLES
});



Route::namespace('backend\phpword')->group(function () {

    Route::get('/admin/phpword','PhpWordController@index')->name('phpword');
    Route::get('/admin/docread','PhpWordController@docread')->name('docread');
    Route::get('/admin/html','PhpWordController@html')->name('html');

    });

Route::namespace('frontend')->group(function () {
    // Controllers Within The "App\Http\Controllers\frontend" Namespace
});


// for Yilan Testing static html
Route::get('/frontend/{name}', function ($name) {
    //
})->where('frontend', '[A-Za-z]+');


// Image Optimizer
Route::middleware('optimizeImages')->group(function () {
    // all images will be optimized automatically
    Route::post('upload-images', 'UploadController@upload');
});



// Clear ccache on server
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::group(['prefix' => 'admin'], function () {
    // Voyager::routes();
});

 Route::get('/info', function () {
    return view('info');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
