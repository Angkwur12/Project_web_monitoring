<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TangkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // for($i=1; $i <=5; $i++)
        // {
            
        // }
        // // insert data ke table pegawai
        DB::table('tangki4')->insert([
            'tanggal_cek' => '2022-01-10',
            'tinggi_cairan' => $faker->numberBetween(50,170),
            'volume_cairan' => $faker->numberBetween(100,500),
            'suhu_cairan' => $faker->numberBetween(50,110),
        ]);
        
    }
}
