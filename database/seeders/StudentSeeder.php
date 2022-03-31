<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = new \App\Models\Student([
            'FirstName' => 'Tom',
            'LastName' => "Max",
            'School' => 'Nursing'
            ]);
            $s1->save();
            $s2 = new \App\Models\Student([
            'FirstName' => 'Ann',
            'LastName' => "Fay",
            'School' => 'Mining'
            ]);
            $s2->save();
            $s3 = new \App\Models\Student([
            'FirstName' => 'Joe',
            'LastName' => "Sun",
            'School' => 'Nursing'
            ]);
            $s3->save();
            $s4 = new \App\Models\Student([
            'FirstName' => 'Sue',
            'LastName' => "Fox",
            'School' => 'Computing'
            ]);
            $s4->save();
            $s5 = new \App\Models\Student([
            'FirstName' => 'Ben',
            'LastName' => "Ray",
            'School' => 'Mining'
            ]);
            $s5->save();
            $s6 = new \App\Models\Student([
            'FirstName' => 'Zoe',
            'LastName' => "Cox",
            'School' => 'Business'
            ]);
            $s6->save();
    }
}
