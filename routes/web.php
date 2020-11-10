<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/posts',[\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/post',[\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/about',[\App\Http\Controllers\PostController::class, 'about'])->name('posts.about');

Route::get('/contact',[\App\Http\Controllers\PostController::class, 'contact'])->name('posts.contact');

#new方式新增
/*
$post = new Post();
$post -> title = 'test title';
$post -> content = 'test content';
$post -> save();
*/


#create方式新增
/*
Post::create
([
    'title'=>'test title',
    'content'=>'text content',
]);

Post::create
([
    'title'=>'test title2',
    'content'=>'text content2',
]);

Post::create
([
    'title'=>'test title3',
    'content'=>'text content3',
]);

Post::create
([
    'title'=>'test title4',
    'content'=>'text content4',
]);

Post::create
([
    'title'=>'test title5',
    'content'=>'text content5',
]);

Post::create
([
    'title'=>'test title6',
    'content'=>'text content6',
]);

Post::create
([
    'title'=>'test title7',
    'content'=>'text content7',
]);

Post::create
([
    'title'=>'test title8',
    'content'=>'text content8',
]);

Post::create
([
    'title'=>'test title9',
    'content'=>'text content9',
]);

Post::create
([
    'title'=>'test title10',
    'content'=>'text content10',
]);
*/

#all(),將所有資料印出
/*
$posts = Post::all();
dd($posts);
*/

#find(),找出特定資料
/*
$post = Post::find(1);
dd($post);
*/

#where(資料欄位,條件判斷式,資料內容),找出特定範圍資料
/*
$posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);
*/

