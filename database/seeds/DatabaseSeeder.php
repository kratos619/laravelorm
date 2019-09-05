<?php

use App\Model\Category;
use App\Model\Like;
use App\Model\Question;
use App\Model\Reply;
use App\User;
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
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 25)->create();
        factory(Category::class, 25)->create();
        factory(Question::class, 225)->create();
        factory(Reply::class, 455)->create()->each(
            function ($reply) {
                $reply->like()->save(factory(Like::class)->make());
            }
        );
        //factory(Like::class, 855)->create();
    }
}
