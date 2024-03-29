<?php

namespace Database\Seeders;

use App\Models\Grade;
use Database\Factories\GradeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::factory()->count(100)->create();
    }
}
