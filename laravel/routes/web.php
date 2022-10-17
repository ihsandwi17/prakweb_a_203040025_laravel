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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nur Ihsan Dwi L",
        "email" => "Nurihsan719@gmail.com",
        "image" => "1.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Preman pensiun",
            "slug" => "preman-pensiun",
            "author" => "Nur Ihsan Dwi ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto et optio fugiat aliquid. Illum atque earum obcaecati, veniam quod facere, cupiditate architecto repellendus laboriosam voluptatem accusantium sunt, unde consequuntur ex! Ea et numquam ipsum eligendi suscipit molestiae voluptates dolorum doloribus provident! Fugit soluta ipsa molestias magnam ea rem amet, nulla veritatis reprehenderit odio pariatur minus, laborum labore maxime? Distinctio expedita ipsum earum quae dolor autem optio. Nam minus accusamus doloribus suscipit. Quam, cum. Excepturi repellat qui nam ex fugit?"
        ],
        [
            "title" => "Keterkaitan Keterikatan",
            "slug" => "keterkaitan-keterikatan",
            "author" => "Romo",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam inventore illum magni id ipsum odit quas sunt reiciendis corporis aspernatur, ut distinctio suscipit non at. Fuga dignissimos cumque vel odit perspiciatis quam consequatur fugiat illum maiores? Perspiciatis, delectus esse eveniet assumenda at odio praesentium exercitationem. Eius deserunt laboriosam repellendus! Dolorem dolore ipsum, minima iste quaerat praesentium itaque quidem fugiat fugit consectetur mollitia sequi nisi ea, recusandae impedit eveniet officia accusamus eum veritatis nobis numquam quia saepe eos. Quo voluptatum aliquam veritatis esse placeat illo tempora vel, deserunt delectus, mollitia ab, nobis quod ex sed iste! Eum consequatur accusamus magnam dicta. "
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Preman pensiun",
            "slug" => "preman-pensiun",
            "author" => "Nur Ihsan Dwi ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto et optio fugiat aliquid. Illum atque earum obcaecati, veniam quod facere, cupiditate architecto repellendus laboriosam voluptatem accusantium sunt, unde consequuntur ex! Ea et numquam ipsum eligendi suscipit molestiae voluptates dolorum doloribus provident! Fugit soluta ipsa molestias magnam ea rem amet, nulla veritatis reprehenderit odio pariatur minus, laborum labore maxime? Distinctio expedita ipsum earum quae dolor autem optio. Nam minus accusamus doloribus suscipit. Quam, cum. Excepturi repellat qui nam ex fugit?"
        ],
        [
            "title" => "Keterkaitan Keterikatan",
            "slug" => "keterkaitan-keterikatan",
            "author" => "Romo",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam inventore illum magni id ipsum odit quas sunt reiciendis corporis aspernatur, ut distinctio suscipit non at. Fuga dignissimos cumque vel odit perspiciatis quam consequatur fugiat illum maiores? Perspiciatis, delectus esse eveniet assumenda at odio praesentium exercitationem. Eius deserunt laboriosam repellendus! Dolorem dolore ipsum, minima iste quaerat praesentium itaque quidem fugiat fugit consectetur mollitia sequi nisi ea, recusandae impedit eveniet officia accusamus eum veritatis nobis numquam quia saepe eos. Quo voluptatum aliquam veritatis esse placeat illo tempora vel, deserunt delectus, mollitia ab, nobis quod ex sed iste! Eum consequatur accusamus magnam dicta. "
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});