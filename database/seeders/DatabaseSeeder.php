<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Adi Juliarta',
        //     'email' => 'adijuliartha@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // User::create([
        //     'name' => 'Meyan',
        //     'email' => 'meyan@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();    
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excert' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dicta!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque adipisci inventore tempore illo quia aut in, sequi ad esse saepe repellendus blanditiis voluptates perferendis magnam, laboriosam, officia aliquam ducimus quam temporibus amet architecto autem? Nulla consequatur totam exercitationem neque assumenda ipsa impedit sed at facilis ipsam iusto rem, repellat mollitia perspiciatis necessitatibus tenetur libero doloribus laudantium suscipit harum quod error? Ipsum aspernatur ab, ratione blanditiis totam ea unde, sit commodi magnam possimus mollitia assumenda. Totam fugiat delectus aliquam iusto nemo tenetur, in illo velit dolor atque maxime laboriosam accusamus nisi mollitia cupiditate exercitationem dignissimos consectetur libero vel excepturi architecto.</p> <p>Veritatis quasi iure eveniet dolor! Nesciunt, corrupti laudantium provident, velit, quod quam ea odio enim pariatur quibusdam voluptatum qui suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente id dolorum corrupti ex corporis quis nisi libero dolorem assumenda. Adipisci!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excert' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dicta!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque adipisci inventore tempore illo quia aut in, sequi ad esse saepe repellendus blanditiis voluptates perferendis magnam, laboriosam, officia aliquam ducimus quam temporibus amet architecto autem? Nulla consequatur totam exercitationem neque assumenda ipsa impedit sed at facilis ipsam iusto rem, repellat mollitia perspiciatis necessitatibus tenetur libero doloribus laudantium suscipit harum quod error? Ipsum aspernatur ab, ratione blanditiis totam ea unde, sit commodi magnam possimus mollitia assumenda. Totam fugiat delectus aliquam iusto nemo tenetur, in illo velit dolor atque maxime laboriosam accusamus nisi mollitia cupiditate exercitationem dignissimos consectetur libero vel excepturi architecto.</p> <p>Veritatis quasi iure eveniet dolor! Nesciunt, corrupti laudantium provident, velit, quod quam ea odio enim pariatur quibusdam voluptatum qui suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente id dolorum corrupti ex corporis quis nisi libero dolorem assumenda. Adipisci!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excert' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dicta!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque adipisci inventore tempore illo quia aut in, sequi ad esse saepe repellendus blanditiis voluptates perferendis magnam, laboriosam, officia aliquam ducimus quam temporibus amet architecto autem? Nulla consequatur totam exercitationem neque assumenda ipsa impedit sed at facilis ipsam iusto rem, repellat mollitia perspiciatis necessitatibus tenetur libero doloribus laudantium suscipit harum quod error? Ipsum aspernatur ab, ratione blanditiis totam ea unde, sit commodi magnam possimus mollitia assumenda. Totam fugiat delectus aliquam iusto nemo tenetur, in illo velit dolor atque maxime laboriosam accusamus nisi mollitia cupiditate exercitationem dignissimos consectetur libero vel excepturi architecto.</p> <p>Veritatis quasi iure eveniet dolor! Nesciunt, corrupti laudantium provident, velit, quod quam ea odio enim pariatur quibusdam voluptatum qui suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente id dolorum corrupti ex corporis quis nisi libero dolorem assumenda. Adipisci!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excert' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dicta!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque adipisci inventore tempore illo quia aut in, sequi ad esse saepe repellendus blanditiis voluptates perferendis magnam, laboriosam, officia aliquam ducimus quam temporibus amet architecto autem? Nulla consequatur totam exercitationem neque assumenda ipsa impedit sed at facilis ipsam iusto rem, repellat mollitia perspiciatis necessitatibus tenetur libero doloribus laudantium suscipit harum quod error? Ipsum aspernatur ab, ratione blanditiis totam ea unde, sit commodi magnam possimus mollitia assumenda. Totam fugiat delectus aliquam iusto nemo tenetur, in illo velit dolor atque maxime laboriosam accusamus nisi mollitia cupiditate exercitationem dignissimos consectetur libero vel excepturi architecto.</p> <p>Veritatis quasi iure eveniet dolor! Nesciunt, corrupti laudantium provident, velit, quod quam ea odio enim pariatur quibusdam voluptatum qui suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente id dolorum corrupti ex corporis quis nisi libero dolorem assumenda. Adipisci!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


    }
}
