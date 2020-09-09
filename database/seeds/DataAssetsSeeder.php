<?php

use Illuminate\Database\Seeder;

use App\Domain\Asset\Models\DataAsset;


class DataAssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_assets')->truncate();
        factory(DataAsset::class)->times(100)->create();
    }
}
