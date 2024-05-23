<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(StudentsSeeder::class);
        Students::create([
            'name'=>'Jose',
            'email'=>'jose@gmail.com',
            'birthDate'=>'17/11/2003',
            'id_course'=>'1',
        ]);

        Students::create([
            'name'=>'Alex',
            'email'=>'alex@gmail.com',
            'birthDate'=>'16/08/2003',
            'id_course'=>'2',
        ]);

        Students::create([
            'name'=>'Marc',
            'email'=>'marc@gmail.com',
            'birthDate'=>'09/09/2003',
            'id_course'=>'3',
        ]);
        Students::create([
            'name'=>'Oscar',
            'email'=>'oscar@gmail.com',
            'birthDate'=>'22/01/2003',
            'id_course'=>'4',
        ]);
        Students::create([
            'name'=>'Toni',
            'email'=>'toni@gmail.com',
            'birthDate'=>'06/06/2003',
            'id_course'=>'5',
        ]);
        Students::create([
            'name'=>'David',
            'email'=>'david@gmail.com',
            'birthDate'=>'11/11/2003',
            'id_course'=>'1',
        ]);
        Students::create([
            'name'=>'Arnau',
            'email'=>'arnau@gmail.com',
            'birthDate'=>'21/02/2003',
            'id_course'=>'2',
        ]);
        Students::create([
            'name'=>'Andres',
            'email'=>'andres@gmail.com',
            'birthDate'=>'05/01/2003',
            'id_course'=>'3',
        ]);
        Students::create([
            'name'=>'Ruben',
            'email'=>'ruben@gmail.com',
            'birthDate'=>'19/12/2003',
            'id_course'=>'4',
        ]);
        Students::create([
            'name'=>'Clara',
            'email'=>'clara@gmail.com',
            'birthDate'=>'05/10/2003',
            'id_course'=>'5',
        ]);
    }
}
