<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	$faker = Faker\Factory::create();
    $limit = 15;
	 
    public function run()
    {
		$unixTimestap = '1961067200';
        DB::table('obat')->insert([
            'nama_obat' => $faker->name,
            'harga' => numberBetween($min = 10000, $max = 90000),
			'stok' => numberBetween($min = 10, $max = 100),
			'expired_date' => $faker->date('Y-m-d', $unixTimestamp),
			'production_date' => $faker->date('Y-m-d', $unixTimestamp),
        ]);
    }
    }
}
