<?php

class MaterialTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('material')->delete();
        
		\DB::table('material')->insert(array (
			0 => 
			array (
				'ID' => '13',
				'description' => 'M33',
				'cropID' => '1',
				'status' => '1',
			),
			1 => 
			array (
				'ID' => '14',
				'description' => 'M5Y',
				'cropID' => '1',
				'status' => '1',
			),
			2 => 
			array (
				'ID' => '15',
				'description' => 'MRR3',
				'cropID' => '1',
				'status' => '1',
			),
			3 => 
			array (
				'ID' => '16',
				'description' => 'GW22',
				'cropID' => '2',
				'status' => '1',
			),
			4 => 
			array (
				'ID' => '17',
				'description' => 'GTRE',
				'cropID' => '2',
				'status' => '1',
			),
			5 => 
			array (
				'ID' => '18',
				'description' => 'GTRE1',
				'cropID' => '2',
				'status' => '1',
			),
			6 => 
			array (
				'ID' => '19',
				'description' => 'G34E',
				'cropID' => '2',
				'status' => '1',
			),
			7 => 
			array (
				'ID' => '20',
				'description' => 'G13',
				'cropID' => '2',
				'status' => '1',
			),
			8 => 
			array (
				'ID' => '21',
				'description' => 'S45',
				'cropID' => '3',
				'status' => '1',
			),
			9 => 
			array (
				'ID' => '22',
				'description' => 'S45B',
				'cropID' => '3',
				'status' => '1',
			),
			10 => 
			array (
				'ID' => '23',
				'description' => 'CAN1',
				'cropID' => '4',
				'status' => '1',
			),
			11 => 
			array (
				'ID' => '24',
				'description' => 'CAN3',
				'cropID' => '4',
				'status' => '1',
			),
			12 => 
			array (
				'ID' => '25',
				'description' => 'COL333',
				'cropID' => '5',
				'status' => '1',
			),
		));
	}

}
