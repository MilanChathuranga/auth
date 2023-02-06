<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guardians')->insert([
            'nic' => '867145781V',
            'first_name' => 'Kapila',
            'last_name' => 'De Silva',
            'Mobile_number1' => '0774578542',
            'land_phone_number' => '0377858542',
            'student_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('guardians')->insert([
            'nic' => '921474589V',
            'first_name' => 'Christian',
            'last_name' => 'Lewis',
            'Mobile_number1' => '0747858965',
            'land_phone_number' => '0114524542',
            'student_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
