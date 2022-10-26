<?php


namespace App\Models;

class Post 
{
    private static $blog_posts = [

        [
            "title" => "Preman pensiun",
            "slug" => "preman-pensiun",
            "author" => "Nur Ihsan Dwi ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto et optio fugiat aliquid. Illum atque earum obcaecati, veniam quod facere, cupiditate architecto repellendus laboriosam voluptatem accusantium sunt, unde consequuntur ex! Ea et numquam ipsum eligendi suscipit molestiae voluptates dolorum doloribus provident! Fugit soluta ipsa molestias magnam ea rem amet, nulla veritatis reprehenderit odio pariatur minus, laborum labore maxime? Distinctio expedita ipsum earum quae dolor autem optio. Nam minus accusamus doloribus suscipit. Quam, cum. Excepturi repellat qui nam ex fugit?"
        ],
        [
            "title" => "Keterkaitan Keterikatan test",
            "slug" => "keterkaitan-keterikatan",
            "author" => "Romo",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam inventore illum magni id ipsum odit quas sunt reiciendis corporis aspernatur, ut distinctio suscipit non at. Fuga dignissimos cumque vel odit perspiciatis quam consequatur fugiat illum maiores? Perspiciatis, delectus esse eveniet assumenda at odio praesentium exercitationem. Eius deserunt laboriosam repellendus! Dolorem dolore ipsum, minima iste quaerat praesentium itaque quidem fugiat fugit consectetur mollitia sequi nisi ea, recusandae impedit eveniet officia accusamus eum veritatis nobis numquam quia saepe eos. Quo voluptatum aliquam veritatis esse placeat illo tempora vel, deserunt delectus, mollitia ab, nobis quod ex sed iste! Eum consequatur accusamus magnam dicta. "
        ]
    ];

    public static function all()
    {
        return collect (self ::$blog_posts);
    }

    public static function find($slug)
    {   
        return $posts->firstWhere('slug', $slug);
    }



    
}