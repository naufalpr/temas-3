<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();

        News::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Abraham Lincoln',
            'username' => 'lincoln',
            'email' => 'lincoln@email.com',
            'password' => bcrypt('12345')
        ]);

        // News::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ab. Esse, maiores quam et ab illo quisquam alias optio sequi delectus numquam vero nisi deserunt id, adipisci laudantium inventore fugit perferendis iusto? Consectetur minima rem sit impedit quia facere repudiandae eum dignissimos adipisci officiis excepturi molestias alias,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ab. Esse, maiores quam et ab illo quisquam alias optio sequi delectus numquam vero nisi deserunt id, adipisci laudantium inventore fugit perferendis iusto? Consectetur minima rem sit impedit quia facere repudiandae eum dignissimos adipisci officiis excepturi molestias alias, provident hic fugiat ratione mollitia soluta deleniti ea autem corporis! Ducimus accusamus animi nobis sint voluptate praesentium labore. Eveniet ea eum, labore voluptatem officiis exercitationem in saepe temporibus soluta assumenda laboriosam molestiae provident repellat sunt enim. Eveniet, sunt omnis placeat delectus est doloremque reprehenderit, maiores porro id unde explicabo iure amet enim? At.',
        //     'user_id' => 1
        // ]);

        // News::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ab. Esse, maiores quam et ab illo quisquam alias optio sequi delectus numquam vero nisi deserunt id, adipisci laudantium inventore fugit perferendis iusto? Consectetur minima rem sit impedit quia facere repudiandae eum dignissimos adipisci officiis excepturi molestias alias,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ab. Esse, maiores quam et ab illo quisquam alias optio sequi delectus numquam vero nisi deserunt id, adipisci laudantium inventore fugit perferendis iusto? Consectetur minima rem sit impedit quia facere repudiandae eum dignissimos adipisci officiis excepturi molestias alias, provident hic fugiat ratione mollitia soluta deleniti ea autem corporis! Ducimus accusamus animi nobis sint voluptate praesentium labore. Eveniet ea eum, labore voluptatem officiis exercitationem in saepe temporibus soluta assumenda laboriosam molestiae provident repellat sunt enim. Eveniet, sunt omnis placeat delectus est doloremque reprehenderit, maiores porro id unde explicabo iure amet enim? At.',
        //     'user_id' => 1
        // ]);

        // News::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ab. Esse, maiores quam et ab illo quisquam alias optio sequi delectus numquam vero nisi deserunt id, adipisci laudantium inventore fugit perferendis iusto? Consectetur minima rem sit impedit quia facere repudiandae eum dignissimos adipisci officiis excepturi molestias alias,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, ab. Esse, maiores quam et ab illo quisquam alias optio sequi delectus numquam vero nisi deserunt id, adipisci laudantium inventore fugit perferendis iusto? Consectetur minima rem sit impedit quia facere repudiandae eum dignissimos adipisci officiis excepturi molestias alias, provident hic fugiat ratione mollitia soluta deleniti ea autem corporis! Ducimus accusamus animi nobis sint voluptate praesentium labore. Eveniet ea eum, labore voluptatem officiis exercitationem in saepe temporibus soluta assumenda laboriosam molestiae provident repellat sunt enim. Eveniet, sunt omnis placeat delectus est doloremque reprehenderit, maiores porro id unde explicabo iure amet enim? At.',
        //     'user_id' => 1
        // ]);
    }
}
