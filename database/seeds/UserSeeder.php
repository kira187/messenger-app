<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kevin ',
            'email' => 'kevin@mail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Alejandro',
            'email' => 'alex@mail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Misael',
            'email' => 'misael@mail.com',
            'password' => bcrypt('123123')
        ]);
    }
}
