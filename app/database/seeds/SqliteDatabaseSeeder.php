<?php

class SqliteDatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        \DB::statement('PRAGMA foreign_keys = 0');

        $this->call('MaterialTableSeeder');
        $this->call('CropTableSeeder');
        
        \DB::statement('PRAGMA foreign_keys = 1');

        $this->command->info('All tables seeded!');
    }

}