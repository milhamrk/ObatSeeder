<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	 
    public function run()
    {
		$faker = Faker\Factory::create();
		$limit = 15;
		$unixTimestamp = '1961067200';
		for ($i = 0; $i < $limit; $i++) {           
			DB::table('obat')->insert([
				'nama_obat' => $faker->name,
				'harga' => $faker->numberBetween(10000,90000),
				'stok' => $faker->numberBetween(10, 100),
				'expired_date' => $faker->date('Y-m-d', $unixTimestamp),
				'production_date' => $faker->date('Y-m-d', 'now')
			]);
		}
    }
}
