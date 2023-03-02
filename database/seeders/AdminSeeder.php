<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'iury@email.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$ozm7iIkZa541AsAEaQ78A.HywZv1vE6jnsM3I14p7ByJgF0NTm7mW',
        ])->assignRole('admin','writer');
    }
}
