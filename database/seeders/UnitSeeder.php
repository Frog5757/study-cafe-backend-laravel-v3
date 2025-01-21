<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([
            'name' => '正の数と負の数',
            'subject_id' => 1, 
        ]);

        Unit::create([
            'name' => '加法・減法',
            'subject_id' => 1, 
        ]);
        Unit::create([
            'name' => 'be動詞の基本',
            'subject_id' => 2, 
        ]);
        Unit::create([
            'name' => 'be動詞の否定文と疑問文',
            'subject_id' => 2,
        ]);
    }
}
