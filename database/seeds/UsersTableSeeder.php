<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Daan Boschmans',
            'username' => 'Dax18',
            'email' => 'dax@cc.com' ,
            'password' => Hash::make(123123),
    ]);
    }
}
