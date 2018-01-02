<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'ادمین',
            'email' => 'admin@shimi.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
