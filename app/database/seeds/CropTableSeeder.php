<?php

class CropTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('crop')->delete();
        
		\DB::table('crop')->insert(array (
			0 => 
			array (
				'ID' => '1',
				'description' => 'Maiz',
				'fatContent' => '14.50',
				'plantingDate' => '2012-03-09',
				'status' => '1',
			),
			1 => 
			array (
				'ID' => '2',
				'description' => 'Girasol',
				'fatContent' => '39.25',
				'plantingDate' => '2012-06-25',
				'status' => '1',
			),
			2 => 
			array (
				'ID' => '3',
				'description' => 'Sorgo',
				'fatContent' => '22.90',
				'plantingDate' => '2012-05-15',
				'status' => '1',
			),
			3 => 
			array (
				'ID' => '4',
				'description' => 'Canola',
				'fatContent' => '28.79',
				'plantingDate' => '2012-09-10',
				'status' => '1',
			),
			4 => 
			array (
				'ID' => '5',
				'description' => 'Colsa',
				'fatContent' => '25.66',
				'plantingDate' => '2021-02-01',
				'status' => '1',
			),
		));
	}

}
