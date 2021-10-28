<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'akhtarp@ghrix.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            //'password' => bcrypt('admin@123'),
            'password' => 'Admin@123',
            'approved'=> 1,
        ]);
    }
}
