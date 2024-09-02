<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		User::truncate();
        User::insert([
			[
                'name' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
            ]     
        
		]);
              User::insert([
			[
                'name' => 'User',
                'username' => 'Adit',
                'password' => bcrypt('adit123'),
            ]     
        
		]);
    }
}