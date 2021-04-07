<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     * @return void
     */
    public function run() {
        User::query()->insert([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'role' => 'Admin',
            'password' => Hash::make('123456789')
        ]);
    }
}
