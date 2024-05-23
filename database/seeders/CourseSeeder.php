<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $this->call(CourseSeeder::class);
        Course::create([
            'name'=>'Matematicas',
            'price'=>'100'
        ]);
        Course::create([
            'name'=>'Informatica',
            'price'=>'250'
        ]);
        Course::create([
            'name'=>'Quimica',
            'price'=>'80'
        ]);
        Course::create([
            'name'=>'Fisica',
            'price'=>'130'
        ]);
        Course::create([
            'name'=>'Historia',
            'price'=>'180'
        ]);
    }
}
