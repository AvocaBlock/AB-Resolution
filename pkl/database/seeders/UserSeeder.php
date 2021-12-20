<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // USER
        user::create([
            'admin_id' => 'AD001',
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'isAdmin' => '1',
            'name' =>'admin'
        ]);
        user::create([
            'admin_id' => 'AD002',
            'username' => 'user',
            'password' => bcrypt('user'),
            'isAdmin' => '0',
            'name' =>'user'
        ]);
    }
}
