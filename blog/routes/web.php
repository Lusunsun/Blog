<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Middleware\ArticleRequest;
use App\Http\Middleware\Backend;
use \App\Http\Controllers\Backend\TagsController;

// 首页
Route::get('/', [HomeController::class, 'index'])->name('index');

// 文章详情
Route::get('/article', [HomeController::class, 'articleDetail'])->name('articleDetail');

// 时间轴
Route::get('/archives', [HomeController::class, 'archives'])->name('archives');

// 文章Tags
Route::get('/tags', [TagsController::class, 'getTags'])->name('tags');

// 友链
Route::get('/friends', [HomeController::class, 'friends'])->name('friends');

// 关于
Route::get('/about', [HomeController::class, 'about'])->name('about');

// 登录页面
Route::get('/backend/login', [AdminController::class, 'login'])->name('login');

// 后台路由
Route::namespace('backend')->prefix('backend')->middleware(Backend::class)->group(function () {

    // 文章列表
    Route::get('/index', [ArticleController::class, 'index'])->name('backendIndex');

    // 文章详情
    Route::get('/articleDetail/{articleId}', [ArticleController::class, 'articleDetail'])->name('backendArticleDetail');

    // 发布文章表单
    Route::get('/createArticleForm', [ArticleController::class, 'createArticleForm'])->name('createArticleForm');

    Route::post('/createArticle', [ArticleController::class, 'createArticle'])->name('createArticle');

    // tags列表
    Route::get('/getTagsData', [TagsController::class, 'getTagsData'])->name('getTagsData');
});
