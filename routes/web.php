<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'index');

/**
 * Admin Routes
 */
Route::prefix('admin')->group(function () {

    Route::prefix('client')->group(function () {
        Route::get('/', 'Admin\ClientController@index');
        Route::get('/add', 'Admin\ClientController@create');
        Route::get('/edit', 'Admin\ClientController@edit');
    });

    Route::prefix('client-user')->group(function () {
        Route::get('/', 'Admin\ClientUserController@index');
        Route::get('/add', 'Admin\ClientUserController@create');
        Route::get('/edit', 'Admin\ClientUserController@edit');
    });

    Route::prefix('team-member')->group(function () {
        Route::get('/', 'Admin\TeamMemberController@index');
        Route::get('/add', 'Admin\TeamMemberController@create');
        Route::get('/edit', 'Admin\TeamMemberController@edit');
    });

    Route::prefix('role')->group(function () {
        Route::get('/', 'Admin\RoleController@index');
        Route::get('/add', 'Admin\RoleController@create');
        Route::get('/edit', 'Admin\RoleController@edit');
        // Route::view('/', 'roles.app-users-list');
        // Route::view('/add', 'roles.app-users-add');
        // Route::view('/edit', 'roles.app-users-edit');
    });

    Route::prefix('project')->group(function () {
        Route::get('/', 'Admin\ProjectController@index');
        Route::get('/add', 'Admin\ProjectController@create');
        Route::get('/edit', 'Admin\ProjectController@edit');
        Route::get('/tasks', 'Admin\ProjectController@task');
        Route::get('/milestones', 'Admin\ProjectController@milestone');
        Route::get('/details', 'Admin\ProjectController@detail');
        Route::get('/overview', 'Admin\ProjectController@overview');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', 'Admin\CategoryController@index');
        Route::get('/add', 'Admin\CategoryController@create');
        Route::get('/edit', 'Admin\CategoryController@edit');
    });
    /**
     * Intros Routes
     */
    Route::prefix('estimate')->group(function () {
        Route::get('/', 'Admin\EstimateController@index');
        Route::get('/add', 'Admin\EstimateController@create');
        Route::get('/edit', 'Admin\EstimateController@edit');
        Route::get('/demo', 'Admin\EstimateController@demo');
    });
});

Route::view('/register', 'Auth.auth-register');
Route::view('/login', 'Auth.auth-login');
Route::view('/forgot', 'Auth.auth-forgot-password');
Route::view('/reset', 'Auth.auth-reset-password');
/**
 * Client User Routes
 */
Route::prefix('client')->group(function () {
});
