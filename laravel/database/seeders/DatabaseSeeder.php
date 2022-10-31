<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::factory(3)->create();

        // User::create([
        //     'name' => 'Nur Ihsan Dwi Listiono',
        //     'email' => 'Nurihsan273@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sigit',
        //     'email' => 'Sigit23@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        Category::create([
            'name' => 'Web-Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

//pertama
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam suscipit dignissimos facere vel exercitationem. Adipisci aliquid cupiditate quia corrupti quis delectus sed assumenda ratione deleniti, nobis, ipsum odio? Dolore facilis iure culpa corporis officia blanditiis quaerat officiis! Unde tempora similique corporis nemo odio, quaerat officia! Dolor sequi a tempore id tenetur dicta corporis beatae inventore, eligendi, ducimus dolore ea minus excepturi velit explicabo. Voluptatem culpa quae deleniti maxime vel amet blanditiis! Quo a eius fugiat voluptate laboriosam, possimus obcaecati nesciunt vitae repellendus in, tempore, dolorem pariatur ex. Porro in accusantium et facilis at asperiores dolore voluptatum dolores? Vel, explicabo minima?',
            'category_id' => 1,
            'user_id' => 1
        ]);

//kedua
        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam suscipit dignissimos facere vel exercitationem. Adipisci aliquid cupiditate quia corrupti quis delectus sed assumenda ratione deleniti, nobis, ipsum odio? Dolore facilis iure culpa corporis officia blanditiis quaerat officiis! Unde tempora similique corporis nemo odio, quaerat officia! Dolor sequi a tempore id tenetur dicta corporis beatae inventore, eligendi, ducimus dolore ea minus excepturi velit explicabo. Voluptatem culpa quae deleniti maxime vel amet blanditiis! Quo a eius fugiat voluptate laboriosam, possimus obcaecati nesciunt vitae repellendus in, tempore, dolorem pariatur ex. Porro in accusantium et facilis at asperiores dolore voluptatum dolores? Vel, explicabo minima?',
            'category_id' => 1,
            'user_id' => 1
        ]);

//ketiga
        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam suscipit dignissimos facere vel exercitationem. Adipisci aliquid cupiditate quia corrupti quis delectus sed assumenda ratione deleniti, nobis, ipsum odio? Dolore facilis iure culpa corporis officia blanditiis quaerat officiis! Unde tempora similique corporis nemo odio, quaerat officia! Dolor sequi a tempore id tenetur dicta corporis beatae inventore, eligendi, ducimus dolore ea minus excepturi velit explicabo. Voluptatem culpa quae deleniti maxime vel amet blanditiis! Quo a eius fugiat voluptate laboriosam, possimus obcaecati nesciunt vitae repellendus in, tempore, dolorem pariatur ex. Porro in accusantium et facilis at asperiores dolore voluptatum dolores? Vel, explicabo minima?',
            'category_id' => 2,
            'user_id' => 1
        ]);

//keempat
        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam suscipit dignissimos facere vel exercitationem. Adipisci aliquid cupiditate quia corrupti quis delectus sed assumenda ratione deleniti, nobis, ipsum odio? Dolore facilis iure culpa corporis officia blanditiis quaerat officiis! Unde tempora similique corporis nemo odio, quaerat officia! Dolor sequi a tempore id tenetur dicta corporis beatae inventore, eligendi, ducimus dolore ea minus excepturi velit explicabo. Voluptatem culpa quae deleniti maxime vel amet blanditiis! Quo a eius fugiat voluptate laboriosam, possimus obcaecati nesciunt vitae repellendus in, tempore, dolorem pariatur ex. Porro in accusantium et facilis at asperiores dolore voluptatum dolores? Vel, explicabo minima?',
            'category_id' => 2,
            'user_id' => 2
        ]);
        
    }
}
