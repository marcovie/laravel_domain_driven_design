<?php

use Illuminate\Database\Seeder;

class DefinitionManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('definition_manufacturers')->truncate();
        //Added random data for the test.
        DB::table('definition_manufacturers')->insert([
                'description' => 'Dell',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('definition_manufacturers')->insert([
                'description' => 'Apple',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('definition_manufacturers')->insert([
                'description' => 'HP',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('definition_manufacturers')->insert([
                'description' => 'Lenovo',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]);

        DB::table('definition_manufacturers')->insert([
                'description' => 'Asus',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]);
    }
}
