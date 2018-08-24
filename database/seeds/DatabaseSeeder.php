<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ProductsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
