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

Route::group(['middleware' => ['web']], function () {
    // Website routes...
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@showHome']);

    Route::get('/', ['as' => 'show.website', 'uses' => 'HomeController@showHome']);
    Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@showAbout']);
    Route::get('/terms-of-use', ['as' => 'terms', 'uses' => 'HomeController@showTerms']);
    Route::get('/privacy-policy', ['as' => 'privacy_policy', 'uses' => 'HomeController@showPrivacyPolicy']);
    Route::get('/events', ['as' => 'events', 'uses' => 'HomeController@showEvents']);
    Route::get('/news', ['as' => 'news', 'uses' => 'HomeController@showNews']);
    Route::get('/directory', ['as' => 'directory', 'uses' => 'DirectoryController@showDirectory']);

    Route::get('/blog', ['as' => 'show.blog_list', 'uses' => 'BlogController@showBlogList']);
    Route::get('/blog/{code}', ['as' => 'show.blog', 'uses' => 'BlogController@showBlog']);

    Route::post('/send-mail', ['as' => 'send_mail', 'uses' => 'HomeController@sendContactMessage']);

    Route::get('/campaigns/waste-management', ['as' => 'waste_management', 'uses' => 'HomeController@showWasteManagementAwareness']);

    Route::get('/campaigns/bhangarwala-association', ['as' => 'recycler_association', 'uses' => 'HomeController@showRecyclersAssociation']);

    Route::get('/campaigns/teachers-association', ['as' => 'teachers_association', 'uses' => 'HomeController@showTeachersAssociation']);

    Route::get('/campaigns/role-model', ['as' => 'role_model', 'uses' => 'HomeController@showRoleModel']);

    Route::get('/campaigns/success-stories', ['as' => 'success_stories_index', 'uses' => 'HomeController@showSuccessStoryIndex']);

    Route::prefix('/campaigns/success-stories')->group(function () {
        
        Route::get('mrs-surekha-joshi', ['as' => 'success_stories_mrs_surekha_joshi', 'uses' => 'HomeController@showSuccessStorySurekhaJoshi']);

        Route::get('mrs-aparna-kavi', ['as' => 'success_stories_mrs_aparna_kavi', 'uses' => 'HomeController@showSuccessStoryAparnaKavi']);
        
    });

    Route::get('/waste-classification', ['as' => 'waste_classification', 'uses' => 'InfoController@showWasteClassification']);

    Route::get('/solutions/magic-bucket', ['as' => 'magic_bucket', 'uses' => 'HomeController@showMagicBucket']);

    //Route::get('/projects/waste-management/campaigns', ['as' => 'waste_management_campaign', 'uses' => 'HomeController@showWasteManagementCampaign']);
    Route::get('/activities', ['as' => 'activities', 'uses' => 'HomeController@showActivities']);

    Route::get('/projects/forestation', ['as' => 'forestation', 'uses' => 'HomeController@showForestation']);
    
    Route::get('/contact-us', ['as' => 'contact_us', 'uses' => 'HomeController@showContactUs']);
    Route::get('/kdmc-downloads', ['as' => 'kdmc_downloads', 'uses' => 'HomeController@showKdmcDownloads']);
    Route::get('refreshcaptcha',['as' => 'refreshcaptcha', 'uses' => 'HomeController@refreshCaptcha']);

    Route::get('/info/{slug}', ['as' => 'show_page', 'uses' => 'InfoController@showPage']);
    Route::get('/eco-friendly-products', ['as' => 'eco_friendly_products', 'uses' => 'ProductController@showProducts']);

    
    // Authentication routes...
    // Route::get('/login', function() {
    //     return redirect()->route('show.app.login');
    // })->name('login');

    // Authentication routes...
    Route::get('/admin', ['as' => 'show.app.login', 'uses' => 'Auth\LoginController@getLogin']);
    //Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::get('/login', ['as' => 'login', 'uses' => 'HomeController@showWebLogin']);
    Route::post('/login', ['as' => 'submit.login', 'uses' => 'Auth\LoginController@login']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    Route::get('/register', ['as' => 'register', 'uses' => 'HomeController@showWebRegister']);
    Route::post('/register', ['as' => 'submit.register', 'uses' => 'HomeController@register']);
    Route::get('/verify/otp', ['as' => 'otp.form', 'uses' => 'HomeController@showVerifyOTP']);
    Route::post('/verify/otp', ['as' => 'verify.otp', 'uses' => 'HomeController@verifyOTP']);


    // Password Reset routes...
    Route::get('/password/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('/password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('/password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('/password/reset', ['as' => 'password.update', 'uses' => 'Auth\ResetPasswordController@reset']);
    Route::get('/verify/email/{token}', ['as' => 'verify.email', 'uses' => 'UserController@verifyUserEmail']);

    // Request that requires authorization...
    Route::group(['middleware' => 'auth'], function () {

        // Website routes...
        Route::get('/registration-success', ['as' => 'registration-success', 'uses' => 'HomeController@showRegistrationSuccess']);
        
        Route::get('/new-blog', ['as' => 'show.blog_form', 'uses' => 'BlogController@showBlogForm']);
        Route::post('/new-blog', ['as' => 'save.blog', 'uses' => 'BlogController@saveBlog']);

        Route::get('/my-blogs', ['as' => 'show.user_blogs', 'uses' => 'BlogController@showUserBlogs']);

        Route::get('/edit-blog/{code}', ['as' => 'show.blog_edit_form', 'uses' => 'BlogController@showBlogEditForm']);
        Route::post('/edit-blog/{code}', ['as' => 'update.blog', 'uses' => 'BlogController@updateBlog']);

        // App Home page module routes...
        Route::get('/app/modules', ['as' => 'show.app.modules', 'uses' => 'ModuleController@show']);
        Route::get('/app/reports', ['as' => 'show.app.reports', 'uses' => 'ReportController@show']);
        Route::get('/app/activities', ['as' => 'show.app.activities', 'uses' => 'ActivityController@show']);
        Route::get('/app/settings', ['as' => 'show.app.settings', 'uses' => 'SettingsController@show']);
        Route::post('/app/settings', ['as' => 'save.app.settings', 'uses' => 'SettingsController@save']);
        Route::post('/update_module_sequence', ['as' => 'update.module.sequence', 'uses' => 'ModuleController@updateSequence']);
        Route::post('/import_from_csv', ['as' => 'import.from.csv', 'uses' => 'ImportController@import']);

        // Backup routes...
        Route::get('/app/backups', ['as' => 'show.app.backups', 'uses' => 'BackupController@show']);
        Route::get('/app/backups/download/{name}', ['as' => 'download.app.backups', 'uses' => 'BackupController@download']);
        Route::post('/app/backups/delete/{name}', ['as' => 'delete.app.backups', 'uses' => 'BackupController@delete']);
        Route::post('/app/backups/create', ['as' => 'create.app.backups', 'uses' => 'BackupController@create']);

        // List View...
        Route::get('/list/{slug}', ['as' => 'show.list', 'uses' => 'ListViewController@showList']);

        // Report View...
        Route::get('/app/report/{report_name}', ['as' => 'show.report', 'uses' => 'ReportController@showReport']);

        // Autocomplete data...
        Route::get('/get_auto_complete', ['as' => 'get.autocomplete', 'uses' => 'AutocompleteController@getData']);

        // App Form/Module routes...
        Route::get('/form/{slug}', ['as' => 'new.doc', 'uses' => 'OriginController@show']);
        Route::post('/form/{slug}', ['as' => 'create.doc', 'uses' => 'OriginController@save']);
        Route::get('/form/{slug}/{id}', ['as' => 'show.doc', 'uses' => 'OriginController@show']);
        Route::get('/form/{slug}/draft/{id}', ['as' => 'copy.doc', 'uses' => 'OriginController@copy']);
        Route::post('/form/{slug}/{id}', ['as' => 'update.doc', 'uses' => 'OriginController@save']);
        Route::get('/form/{slug}/delete/{id}', ['as' => 'delete.doc', 'uses' => 'OriginController@delete']);

        // App API routes...
        Route::group(['prefix' => 'api'], function () {
            Route::post('/doc/create/{slug}', ['as' => 'api.create.doc', 'uses' => 'OriginController@save']);
            Route::get('/doc/list/{slug}', ['as' => 'api.get.doclist', 'uses' => 'ListViewController@showList']);
            Route::get('/doc/{slug}/{id}', ['as' => 'api.get.doc', 'uses' => 'OriginController@show']);
            Route::post('/doc/update/{slug}/{id}', ['as' => 'api.update.doc', 'uses' => 'OriginController@save']);
            Route::get('/doc/delete/{slug}/{id}', ['as' => 'api.delete.doc', 'uses' => 'OriginController@delete']);
        });
    });
});
