<?php

namespace Database\Seeders;

use App\Helpers\GuidHelper;
use App\Models\CertificateType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertifcateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CertificateType::insert(

            [
                [
                    'alias' => 'a1',
                    'name' => 'A1',
                    'has_module' => false,
                    'total_marks' => 60,
                    'guid' => GuidHelper::getGuid()
                ],
                [
                    'alias' => 'a2',
                    'name' => 'A2',
                    'has_module' => false,
                    'total_marks' => 60,
                    'guid' => GuidHelper::getGuid()
                ], [
                'alias' => 'b1', 'name' => 'B1',
                'has_module' => false,
                'total_marks' => 60,
                'guid' => GuidHelper::getGuid()
            ], [
                'alias' => 'b2', 'name' => 'B2',
                'has_module' => true,
                'total_marks' => 60,
                'guid' => GuidHelper::getGuid()
            ],
                [
                    'alias' => 'c1', 'name' => 'C1',
                    'has_module' => true,
                    'total_marks' => 60,
                    'guid' => GuidHelper::getGuid()
                ]
            ]
        );
    }
}
