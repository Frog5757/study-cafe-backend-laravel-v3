<?php

namespace Database\Seeders;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        Subject::create(['name' => '数学']);
        Subject::create(['name' => '英語']);
    }
}
