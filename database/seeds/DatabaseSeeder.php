<?php

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
        $this->call(UserSeeder::class );
        $this->call(ConversationSeeder::class );
        $this->call(MessagesSeeder::class );
    }
}
