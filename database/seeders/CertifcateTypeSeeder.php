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
                    'alias' => 'A1',
                    'name' => 'Anfanger',
                    'has_module' => false,
                    'total_marks' => 60,
                    'guid' => GuidHelper::getGuid(),
                    "punkte"=>15
                ],
                [
                    'alias' => 'A2',
                    'name' => 'Grundlegende Kenntnisse',
                    'has_module' => false,
                    'total_marks' => 60,
                    'guid' => GuidHelper::getGuid(),
                    "punkte"=>15
                ], [
                'alias' => 'B1', 'name' => 'Fortgeschrittene Sprachverwendung',
                'has_module' => false,
                'total_marks' => 100,
                'guid' => GuidHelper::getGuid(),
                "punkte"=>20
            ], [
                'alias' => 'B2', 'name' => 'Selbstandige Sprachverwendung',
                'has_module' => true,
                'total_marks' => 100,
                'guid' => GuidHelper::getGuid(),
                "punkte"=>20
            ],
                [
                    'alias' => 'C1', 'name' => 'Fachkundige Sprachverwendung',
                    'has_module' => true,
                    'total_marks' => 130,
                    'guid' => GuidHelper::getGuid(),
                    "punkte"=>25
                ]
                , [
                    'alias' => 'C2', 'name' => 'Annahernd muttersprachliche kenntnisse',
                    'has_module' => true,
                    'total_marks' => 130,
                    'guid' => GuidHelper::getGuid(),
                    "punkte"=>25
                ]
            ]
        );
    }
}
