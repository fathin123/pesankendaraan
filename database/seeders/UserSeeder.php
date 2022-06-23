<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Patin',
            'level' => 'admin',
            'email' => 'patin@admin.com',
            'password' => bcrypt('admin'),
            'nohp' => '081363884319',
            'alamat' => 'sumberrejo',
            'remember_token' => Str::random(60),
        ]);
    }
}
