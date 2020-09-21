<?php

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
        // $this->call(UserSeeder::class);
        factory(User::class)->create(
            [
                'email' => 'admin@mail.com',
                'password' => '123456789',
                'name' => 'admin',
            ]
        );

        factory(User::class)->create(
            [
                'email' => 'somsak@mail.com',
                'password' => '123456789',
                'name' => 'somsak',
            ]
        );

        factory(User::class)->create(
            [
                'email' => 'jan@mail.com',
                'password' => '123456789',
                'name' => 'jan',
            ]
        );
    }
}
