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
        Schema::disableForeignKeyConstraints();
        $this->call(DefinitionManufactureSeeder::class);//Can make fixed list and people could add to the list or something this just dummy data to play with.
        if (App::Environment() === 'local')
        {//Only run this Factory if on local and NOT PRODUCTION if this doesn't ease you just comment line out for safety when going live.
            $this->call(DataAssetsSeeder::class);//Change .env file to production when going live.
        }
        Schema::enableForeignKeyConstraints();
    }
}
