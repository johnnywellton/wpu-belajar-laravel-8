<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Sandhika Galih',
            'username' => 'sandhikagalih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt(12345)
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos vitae! Vel cum, ducimus doloribus maiores voluptate molestiae sunt ipsa praesentium enim ad aperiam neque dolorem eveniet quo, sapiente veritatis veniam perferendis ullam culpa iste fugit distinctio adipisci? Fugiat dignissimos voluptate id maiores praesentium explicabo eius totam, minima ut officia eligendi quo accusamus possimus laboriosam sequi corrupti cumque incidunt placeat consequuntur dolore alias sapiente distinctio molestias! Blanditiis commodi quae officiis reiciendis praesentium, vel, accusantium libero sed asperiores eaque nihil itaque debitis, illo eos dicta.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos vitae! Vel cum, ducimus doloribus maiores voluptate molestiae sunt ipsa praesentium enim ad aperiam neque dolorem eveniet quo, sapiente veritatis veniam perferendis ullam culpa iste fugit distinctio adipisci? Fugiat dignissimos voluptate id maiores praesentium explicabo eius totam, minima ut officia eligendi quo accusamus possimus laboriosam sequi corrupti cumque incidunt placeat consequuntur dolore alias sapiente distinctio molestias! Blanditiis commodi quae officiis reiciendis praesentium, vel, accusantium libero sed asperiores eaque nihil itaque debitis, illo eos dicta.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos vitae! Vel cum, ducimus doloribus maiores voluptate molestiae sunt ipsa praesentium enim ad aperiam neque dolorem eveniet quo, sapiente veritatis veniam perferendis ullam culpa iste fugit distinctio adipisci? Fugiat dignissimos voluptate id maiores praesentium explicabo eius totam, minima ut officia eligendi quo accusamus possimus laboriosam sequi corrupti cumque incidunt placeat consequuntur dolore alias sapiente distinctio molestias! Blanditiis commodi quae officiis reiciendis praesentium, vel, accusantium libero sed asperiores eaque nihil itaque debitis, illo eos dicta.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse libero obcaecati ipsam nemo, praesentium optio quo molestias at tenetur modi quod asperiores quidem aperiam sint dignissimos vitae! Vel cum, ducimus doloribus maiores voluptate molestiae sunt ipsa praesentium enim ad aperiam neque dolorem eveniet quo, sapiente veritatis veniam perferendis ullam culpa iste fugit distinctio adipisci? Fugiat dignissimos voluptate id maiores praesentium explicabo eius totam, minima ut officia eligendi quo accusamus possimus laboriosam sequi corrupti cumque incidunt placeat consequuntur dolore alias sapiente distinctio molestias! Blanditiis commodi quae officiis reiciendis praesentium, vel, accusantium libero sed asperiores eaque nihil itaque debitis, illo eos dicta.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
