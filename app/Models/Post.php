<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //masukkan field yang bisa dimasukkan dengan metode create dengan array banyak
    //protected $fillable = ['title','excert','body'];
    protected $guarded = ['id'];
    //ingat reset tinkernya untuk apply perubahan yang kita buat exit(); kemudian masuk kembali ke tinker
    protected $with = ['category','user'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search']:false){
        //     return $query->where('title','like','%'.$filters['search'].'%')
        //     ->orWhere('body','like','%'.$filters['search'].'%');
        // }
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like','%'.$search.'%')
             ->orWhere('body','like','%'.$search.'%');
        });    

        $query->when($filters['category'] ?? false, function ($query,$category){
            return $query->whereHas('category', function ($query) use ($category){
                $query->where('slug',$category);
            });
        });

        // $query->when($filters['authors']?? false, function($query,$authors){// versi callback
        //     return $query->whereHas('user',function ($query) use ($authors){
        //         $query->where('user_name',$authors);
        //     });
        // });

        $query->when($filters['authors'] ?? false, fn($query,$authors) => //versi arrow function
            $query->whereHas('user', fn($query) => 
                $query->where('user_name',$authors)
            )
        );

    }
    // public function scopeFilter($query){
    //     if(request('search')){
    //         return $query->where('title','like','%'.request('search').'%')
    //         ->orWhere('body','like','%'.request('search').'%');
    //     }
    // }
}
