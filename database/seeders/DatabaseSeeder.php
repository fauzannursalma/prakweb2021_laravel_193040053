<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fauzan Nursalma',
            'username' => 'fauzannursalma',
            'email' => '193040053@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Herlan Nurachman',
        //     'email' => '193040043@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming'
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-design'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate, exercitationem recusandae culpa vel iusto non illo perspiciatis sunt perferendis saepe ducimus laudantium nisi. Accusamus sed rem quam quo laboriosam! Alias illum expedita magni nisi eaque laudantium nam iusto similique harum. Soluta, possimus beatae ipsa fugiat, eos quae reiciendis atque esse quisquam blanditiis ea. Quasi, eos corporis nemo eum distinctio sunt vitae consequatur ullam beatae ad! Soluta exercitationem officia, dolorem tempora ab, qui blanditiis consequatur maxime, ipsa quas nam. Quos, iste! A deserunt, in iste adipisci similique sed! Voluptate in ducimus iusto dolore, veritatis praesentium consequatur dicta aut?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate, exercitationem recusandae culpa vel iusto non illo perspiciatis sunt perferendis saepe ducimus laudantium nisi. Accusamus sed rem quam quo laboriosam! Alias illum expedita magni nisi eaque laudantium nam iusto similique harum. Soluta, possimus beatae ipsa fugiat, eos quae reiciendis atque esse quisquam blanditiis ea. Quasi, eos corporis nemo eum distinctio sunt vitae consequatur ullam beatae ad! Soluta exercitationem officia, dolorem tempora ab, qui blanditiis consequatur maxime, ipsa quas nam. Quos, iste! A deserunt, in iste adipisci similique sed! Voluptate in ducimus iusto dolore, veritatis praesentium consequatur dicta aut?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate, exercitationem recusandae culpa vel iusto non illo perspiciatis sunt perferendis saepe ducimus laudantium nisi. Accusamus sed rem quam quo laboriosam! Alias illum expedita magni nisi eaque laudantium nam iusto similique harum. Soluta, possimus beatae ipsa fugiat, eos quae reiciendis atque esse quisquam blanditiis ea. Quasi, eos corporis nemo eum distinctio sunt vitae consequatur ullam beatae ad! Soluta exercitationem officia, dolorem tempora ab, qui blanditiis consequatur maxime, ipsa quas nam. Quos, iste! A deserunt, in iste adipisci similique sed! Voluptate in ducimus iusto dolore, veritatis praesentium consequatur dicta aut?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolores quam cupiditate, exercitationem recusandae culpa vel iusto non illo perspiciatis sunt perferendis saepe ducimus laudantium nisi. Accusamus sed rem quam quo laboriosam! Alias illum expedita magni nisi eaque laudantium nam iusto similique harum. Soluta, possimus beatae ipsa fugiat, eos quae reiciendis atque esse quisquam blanditiis ea. Quasi, eos corporis nemo eum distinctio sunt vitae consequatur ullam beatae ad! Soluta exercitationem officia, dolorem tempora ab, qui blanditiis consequatur maxime, ipsa quas nam. Quos, iste! A deserunt, in iste adipisci similique sed! Voluptate in ducimus iusto dolore, veritatis praesentium consequatur dicta aut?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
