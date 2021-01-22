<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Rafael Torrealba',
            'email' => 'rafaeltorrealba6@gmail.com',
            'password' => Hash::make('123456')
        ]);

        //$this->call(UserSeeder::class);
    }
}
