<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        //dd(request('search')); ambil variable post
        // $post = Post::latest();//versi lama

        // if(request('search')){versi kedua syntax ini pindah ke model
        //     // $post->where('title','like','%'.request('search').'%'); versi 1
        //     $post->where('title','like','%'.request('search').'%')
        //     ->orWhere('body','like','%'.request('search').'%');
        // }
            
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '.$category->name;
        }

        if(request('authors')){
            $authors = User::firstWhere('user_name',request('authors'));
            $title = ' by '. $authors->name;
        }

        return view('posts', [
            'title' => 'All Posts'.$title,
            'active' => 'posts',
            // 'posts' => Post::all()
            // 'posts' => Post::latest()->get()//kalo seperti ini untuk 20 post kita bisa 40 kali query
            // 'posts' => Post::with(['user','category'])->latest()->get()
            // 'posts' => Post::latest()->get()//kita sudah masukkan with ke Models dengan deklarasi variable
            // 'posts' => $post->get() //perintah setelah tambahkan query versi berikutnya menggunaan model
            //  'posts' => Post::latest()->filter(request(['search','category','authors']))->get() sekarang kita pakai pagination
             'posts' => Post::latest()->filter(request(['search','category','authors']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){//binding model Post 
        return view('post',[
            "title" => "Single Post",
            'active' => 'posts',
            "post" => $post
        ]);
    }
}
