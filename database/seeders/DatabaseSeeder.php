<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        $admin = User::create([
            'name' => 'The Dev Economist',
            'email' => 'lesterbolotaolo@thedeveconomist.com',
            'password' => Hash::make('password'),
        ]);
        $admin->is_admin = true;
        $admin->save();

        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
