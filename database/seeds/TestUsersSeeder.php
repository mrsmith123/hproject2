<?php

use Illuminate\Database\Seeder;

use App\User;

class TestUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class, 200)->create();
    }
}
