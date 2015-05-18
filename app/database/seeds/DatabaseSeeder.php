<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        \DB::statement('SET foreign_key_checks = 0');

		$this->call('MaterialTableSeeder');
        $this->call('CropTableSeeder');
        
        \DB::statement('SET foreign_key_checks = 1');

        $this->command->info('All tables seeded!');
	}

}