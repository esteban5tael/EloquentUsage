<?php

namespace Database\Seeders;

use App\Models\MyProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyProfile::factory()->count(100)->create();
    }
}
