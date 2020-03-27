<?php
use App\Mail\TestEmail;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
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



Route::get('/about', function () {
  return view('about');
});



Route::get('auth/{provider}', 'AuthsocController@redirectToProvider'); 
Route::get('auth/{provider}/callback', 'AuthsocController@handleProviderCallback'); 


// Auth::routes();
Auth::routes(['verify' => true]);


// Route::get('/', 'HomeController@indexc')->name('welcome') ;
Route::get('/home', 'HomeController@index')->name('home') ;

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard'); 


//Route::group(['prefix' => 'user', 'middleware'=>'auth'], function () {
  Route::group([ 'middleware'=>'auth'], function () {   
    //route for posts

    Route::get('page/{id}', 'CategoriesController@page')->name('page'); 

    Route::get('/posts', 'PostsController@index')->name('posts'); 
    Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
    Route::get('/post/hdelete/{id}', 'PostsController@hdelete')->name('post.hdelete');
    Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');
    Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::get('/post/created', 'PostsController@created')->name('post.created');
    Route::post('/post/store', 'PostsController@store')->name('post.store'); 
    Route::post('/post/stored', 'PostsController@stored')->name('post.stored'); 
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete'); 
    Route::get('/post/soft', 'PostsController@trashed')->name('post.soft'); 
   
   
    Route::get('/post/{id}', 'commentsController@post')->name('post'); 
    Route::post('/comment/store/{id}', 'commentsController@store')->name('comment.store');
    
     //route for Categories
    Route::get('/categories', 'CategoriesController@index')->name('categories'); 
    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete'); 
    Route::get('/category/create', 'CategoriesController@create')->name('category.create');   
    Route::post('/category/store', 'CategoriesController@store')->name('category.store'); 
    Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update'); 


    //route for Tag
    Route::get('/tags', 'TagController@index')->name('tags'); 
    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete'); 
    Route::get('/tag/create', 'TagController@create')->name('tag.create');   
    Route::post('/tag/store', 'TagController@store')->name('tag.store'); 
    Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update'); 
 


    //route for users
    Route::get('/users', 'UsersController@index')->name('users'); 
    Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin'); //->middleware('admin'); 
    Route::get('/users/notadmin/{id}', 'UsersController@notAdmin')->name('users.not.admin'); 
    Route::get('/users/create', 'UsersController@create')->name('users.create'); 
    Route::post('/users/store', 'UsersController@store')->name('users.store'); 
    Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete'); 
    
    
    //route for user profile
    Route::get('/users/profile', 'ProfilesController@index')->name('users.profile');
    Route::post('/users/profile/update', 'ProfilesController@update')->name('users.profile.update');
    Route::get('/users/profile/create', 'ProfilesController@create')->name('users.profile.create'); 

        //route for Settings
        Route::get('/settings', 'SettingsController@index')->name('settings');
        Route::post('/settings/update', 'SettingsController@update')->name('settings.update');

        //route for User front end
        // Route::get('/', 'siteUIcontroller@index')->name('index');
        Route::get('/category/{id}', 'siteUIcontroller@category')->name('category.show');
        Route::get('/tag/{id}', 'siteUIcontroller@tag')->name('tag.show');

         //route for showing single post
         Route::get('/post/{slug}', 'siteUIcontroller@showPost')->name('post.show'); 


  }) ;

