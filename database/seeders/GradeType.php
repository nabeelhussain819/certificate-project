<?php

namespace Database\Seeders;
use App\Models\Grade;
use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Grade::insert([
            [
                'name' => 'sehr gut (1)',
                'min' => 54,
                'max' => 60,
                'certificate_name'=>'A1'
            ],[
                'name' => ' gut (2)',
                'min' => 48,
                'max' => 53,
                'certificate_name'=>'A1'
            ],[
                'name' => 'befriedigend (3)',
                'min' => 42,
                'max' => 47,
                'certificate_name'=>'A1'
            ],
            [
                'name' => 'ausreichend (4)',
                'min' => 36,
                'max' => 41,
                'certificate_name'=>'A1'
            ],
            [
            'name' => 'ungenügend (5)',
            'min' => 0,
            'max' => 35,
            'certificate_name'=>"A1"
        ],


        [
            'name' => 'sehr gut (1)',
            'min' => 54,
            'max' => 60,
            'certificate_name'=>'A2'
        ],[
            'name' => ' gut (2)',
            'min' => 48,
            'max' => 53,
            'certificate_name'=>'A2'
        ],[
            'name' => 'befriedigend (3)',
            'min' => 42,
            'max' => 47,
            'certificate_name'=>'A2'
        ],[
            'name' => 'ausreichend (4)',
            'min' => 36,
            'max' => 41,
            'certificate_name'=>'A2'
        ],
        [
            'name' => 'ungenügend (5)',
            'min' => 0,
            'max' => 35,
            'certificate_name'=>"A2"
        ],



        [
            'name' => 'sehr gut (1)',
            'min' => 90,
            'max' => 100,
            'certificate_name'=>'B1'
        ],[
            'name' => ' gut (2)',
            'min' => 80,
            'max' => 89,
            'certificate_name'=>'B1'
        ],[
            'name' => 'befriedigend (3)',
            'min' => 70,
        'max' => 79,
            'certificate_name'=>'B1'
        ],[
            'name' => 'ausreichend (4)',
            'min' =>60,
            'max' => 69,
            'certificate_name'=>'B1'
        ],
        [
            'name' => 'ungenügend (5)',
            'min' => 0,
            'max' => 59,
            'certificate_name'=>"B1"
        ],


        [
            'name' => 'sehr gut (1)',
            'min' => 90,
            'max' => 100,
            'certificate_name'=>'B2'
        ],[
            'name' => ' gut (2)',
            'min' => 80,
            'max' => 89,
            'certificate_name'=>'B2'
        ],[
            'name' => 'befriedigend (3)',
            'min' => 70,
        'max' => 79,
            'certificate_name'=>'B2'
        ],[
            'name' => 'ausreichend (4)',
            'min' =>60,
            'max' => 69,
            'certificate_name'=>'B2'
        ],
        [
            'name' => 'ungenügend (5)',
            'min' => 0,
            'max' => 59,
            'certificate_name'=>"B2"
        ],




        [
            'name' => 'sehr gut (1)',
            'min' => 119,
            'max' => 130,
            'certificate_name'=>'C1'
        ],[
            'name' => ' gut (2)',
            'min' => 104,
            'max' => 118,
            'certificate_name'=>'C1'
        ],[
            'name' => 'befriedigend (3)',
            'min' => 91,
        'max' => 103,
            'certificate_name'=>'C1'
        ],[
            'name' => 'ausreichend (4)',
            'min' =>78,
            'max' => 90,
            'certificate_name'=>'C1'
        ],
        [
            'name' => 'ungenügend (5)',
            'min' => 0,
            'max' => 89,
            'certificate_name'=>"C1"
        ],





        [
            'name' => 'sehr gut (1)',
            'min' => 119,
            'max' => 130,
            'certificate_name'=>'C2'
        ],[
            'name' => ' gut (2)',
            'min' => 104,
            'max' => 118,
            'certificate_name'=>'C2'
        ],[
            'name' => 'befriedigend (3)',
            'min' => 91,
        'max' => 103,
            'certificate_name'=>'C2'
        ],[
            'name' => 'ausreichend (4)',
            'min' =>78,
            'max' => 90,
            'certificate_name'=>'C2'
        ],
        [
            'name' => 'ungenügend (5)',
            'min' => 0,
            'max' => 89,
            'certificate_name'=>"C2"
        ],

    ]);
    }
}
