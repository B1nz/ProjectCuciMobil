<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class CuciMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {
            DB::table('cucimobil')->insert([
                'cucimobil_plat_mobil' => 'N1234ABC',
                'cucimobil_nama_mobil' => 'Toyota Avanza',
                'cucimobil_jenis_cuci' => 'Salon'
            ]);
        }

        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'is_admin' => '1',
                'password' => bcrypt('1234567890'),
            ],
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'is_admin' => '0',
                'password' => bcrypt('1234567890'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}