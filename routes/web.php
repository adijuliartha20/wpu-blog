<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        'active' => 'about',
        "name" => 'Meyan',
        "email" => 'adijuliartha@gmail.com',
        "image" => 'adi.jpeg'
    ]);
});



Route::get('/blog', [PostController::class,'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class,'show']);

//halaman category
Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts',[
        'title' => "Post by Category: ".$category->name,
        'active' => 'categories',
        // 'posts' => $category->posts//kalo seperti ini query 20 kali cuy buanyak
        'posts' => $category->posts->load('category','user')
    ]);
});

// Route::get('/categories',function(Category $category){
//     return view('categories',[
//         'title' => 'Post Categories',
//         'active' => 'categories',
//         'categories' => Category::all()
//     ]);
// });sudah tidak dipakai karena semua ke posts.blade.php sekarang

// Route::get('/authors/{user:user_name}',function(User $user){//lihat variable user itu harus sama dengan slug
//     return view('posts',[
//         'title' => 'Post by Author: '.$user->name,
//         'active' => 'posts',
//         // 'posts' => $user->post//ini panggil function post di Models User => kalo code seperti ini bisa 20 kali query cuy
//         'posts' => $user->post->load('category','user')
//     ]);
// }); sudah tidak dipakai karena semua ke posts.blade.php sekarang