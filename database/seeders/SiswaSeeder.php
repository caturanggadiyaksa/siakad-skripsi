<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
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

        // Menghasilkan 50 baris data siswa acak
        for ($i = 1; $i <= 50; $i++) {
            DB::table('table_siswa')->insert([
                'nama' => $faker->name(),
                'id_kelas' => $faker->numberBetween(1, 5),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'nomor_telepon' => $faker->phoneNumber,
            ]);
        }
    }
}
