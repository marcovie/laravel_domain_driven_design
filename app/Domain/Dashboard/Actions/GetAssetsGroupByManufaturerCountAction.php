<?php

namespace App\Domain\Dashboard\Actions;

use App\Domain\Dashboard\Models\DataAsset;
use App\Domain\Dashboard\Models\DefinitionManufacture;

final class GetAssetsGroupByManufaturerCountAction
{
    public function __invoke($request = [])
    {
        try {
            $DefinitionManufactureCount = DefinitionManufacture::withCount('assets')->get()->keyBy('description');

            $subset = $DefinitionManufactureCount->map(function ($DefinitionManufactureCount) {
                return collect($DefinitionManufactureCount->toArray())
                    ->only(['assets_count'])
                    ->all();
            });

            return $subset;
        } catch (\Exception $e) {
            //Maybe send email if issue and display something nice to screen
        }
    }
}
