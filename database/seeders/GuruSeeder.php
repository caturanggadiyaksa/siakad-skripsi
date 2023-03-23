<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 50; $i++) {
            DB::table('table_guru')->insert([
                'nip' => $faker->unique()->numerify('####'),
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'nomor_telepon' => $faker->phoneNumber,
            ]);
        }

    }

}
