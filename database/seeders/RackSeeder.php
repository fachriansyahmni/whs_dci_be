<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('racks')->insert(
            [
                'code' => 'A1.1.1',
                'position' => 'A1-1-1',
                'status' => 'available',
            ],
            [
                'code' => 'A1.1.2',
                'position' => 'A1-1-2',
                'status' => 'available',
            ],
            [
                'code' => 'A1.1.3',
                'position' => 'A1-1-3',
                'status' => 'available',
            ],
            [
                'code' => 'A1.2.1',
                'position' => 'A1-2-1',
                'status' => 'available',
            ],
            [
                'code' => 'A1.2.2',
                'position' => 'A1-2-2',
                'status' => 'available',
            ],
            [
                'code' => 'A1.2.3',
                'position' => 'A1-2-3',
                'status' => 'available',
            ],
            [
                'code' => 'A1.3.1',
                'position' => 'A1-3-1',
                'status' => 'available',
            ],
            [
                'code' => 'A1.3.2',
                'position' => 'A1-3-2',
                'status' => 'available',
            ],
            [
                'code' => 'A1.3.3',
                'position' => 'A1-3-3',
                'status' => 'available',
            ],
            [
                'code' => 'A1.4.1',
                'position' => 'A1-4-1',
                'status' => 'available',
            ],
            [
                'code' => 'A1.4.2',
                'position' => 'A1-4-2',
                'status' => 'available',
            ],
            [
                'code' => 'A1.4.3',
                'position' => 'A1-4-3',
                'status' => 'available',
            ],
            [
                'code' => 'A1.5.1',
                'position' => 'A1-5-1',
                'status' => 'available',
            ],
            [
                'code' => 'A1.5.2',
                'position' => 'A1-5-2',
                'status' => 'available',
            ]
        );
    }
}
