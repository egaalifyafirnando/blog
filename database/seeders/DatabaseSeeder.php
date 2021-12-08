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
        User::factory(4)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Admin My Blog',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // User::create([
        //     'name' => 'Ega Alifya Firnando',
        //     'email' => 'egaalifyaf@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

        Category::create([
            'name' => 'Games',
            'slug' => 'games'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur molestias harum qui sint nesciunt a. Inventore eligendi blanditiis voluptate molestiae reprehenderit distinctio, accusantium sapiente ut aliquid, quidem exercitationem explicabo provident reiciendis labore. Recusandae blanditiis eum alias totam vitae tempore labore voluptatem consequatur repudiandae libero, veniam, perspiciatis tenetur velit dolorum magnam. Asperiores nihil quis dolor amet possimus ipsam voluptatibus',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum aspernatur numquam voluptate necessitatibus eligendi molestiae excepturi neque qui, est quas doloremque illum. Facere dicta illum ratione architecto earum eaque totam ab nemo repellat, commodi eligendi a minus iste iure possimus pariatur, amet veritatis. Ullam consequuntur corrupti numquam libero, obcaecati suscipit quasi laboriosam voluptatibus sapiente eaque laudantium consectetur culpa distinctio dolores ut nostrum, dolorum repudiandae similique ratione, accusantium modi explicabo ipsum asperiores sunt! Dolor soluta vel aut laborum perspiciatis et distinctio? Eaque libero cupiditate quaerat eveniet molestiae, consectetur veritatis dolores aliquid commodi odio aut nihil sit neque praesentium assumenda asperiores inventore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur molestias harum qui sint nesciunt a. Inventore eligendi blanditiis voluptate molestiae reprehenderit distinctio, accusantium sapiente ut aliquid, quidem exercitationem explicabo provident reiciendis labore. Recusandae blanditiis eum alias totam vitae tempore labore voluptatem consequatur repudiandae libero, veniam, perspiciatis tenetur velit dolorum magnam. Asperiores nihil quis dolor amet possimus ipsam voluptatibus',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum aspernatur numquam voluptate necessitatibus eligendi molestiae excepturi neque qui, est quas doloremque illum. Facere dicta illum ratione architecto earum eaque totam ab nemo repellat, commodi eligendi a minus iste iure possimus pariatur, amet veritatis. Ullam consequuntur corrupti numquam libero, obcaecati suscipit quasi laboriosam voluptatibus sapiente eaque laudantium consectetur culpa distinctio dolores ut nostrum, dolorum repudiandae similique ratione, accusantium modi explicabo ipsum asperiores sunt! Dolor soluta vel aut laborum perspiciatis et distinctio? Eaque libero cupiditate quaerat eveniet molestiae, consectetur veritatis dolores aliquid commodi odio aut nihil sit neque praesentium assumenda asperiores inventore.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur molestias harum qui sint nesciunt a. Inventore eligendi blanditiis voluptate molestiae reprehenderit distinctio, accusantium sapiente ut aliquid, quidem exercitationem explicabo provident reiciendis labore. Recusandae blanditiis eum alias totam vitae tempore labore voluptatem consequatur repudiandae libero, veniam, perspiciatis tenetur velit dolorum magnam. Asperiores nihil quis dolor amet possimus ipsam voluptatibus',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum aspernatur numquam voluptate necessitatibus eligendi molestiae excepturi neque qui, est quas doloremque illum. Facere dicta illum ratione architecto earum eaque totam ab nemo repellat, commodi eligendi a minus iste iure possimus pariatur, amet veritatis. Ullam consequuntur corrupti numquam libero, obcaecati suscipit quasi laboriosam voluptatibus sapiente eaque laudantium consectetur culpa distinctio dolores ut nostrum, dolorum repudiandae similique ratione, accusantium modi explicabo ipsum asperiores sunt! Dolor soluta vel aut laborum perspiciatis et distinctio? Eaque libero cupiditate quaerat eveniet molestiae, consectetur veritatis dolores aliquid commodi odio aut nihil sit neque praesentium assumenda asperiores inventore.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
