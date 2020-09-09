<?php

namespace App\Domain\Dashboard\Actions;

use App\Domain\Dashboard\Models\DataAsset;
use App\Domain\Dashboard\Models\DefinitionManufacture;

final class GetAssetsPagingAction
{
    const PAGINATION = 5;

    // private $httpClient;
    //
    // public function __construct(Client $httpClient)
    // {
    //     $this->httpClient = $httpClient;
    // }

    public function __invoke($request = [])
    {
        try {
            $DefinitionManufacture  = DefinitionManufacture::get()->keyBy('id')->toArray();//get list of manufacturers this might be linked to client all depends.

            $AssetModel             = new DataAsset();

            if(isset($request->sort) && !is_null($request->sort))
                $AssetModel->orderby($request->sort, (!is_null($request->orderby) && in_array(strtolower($request->orderby), ['desc', 'asc']))?$request->orderby:'asc');

            if(isset($request->from_date) && !is_null($request->from_date))
                $AssetModel->whereDate('updated_at', '>=', date('Y-m-d 00:00:00', strtotime($request->from_date)));

            if(isset($request->to_date) && !is_null($request->to_date))
                $AssetModel->whereDate('updated_at', '<=', date('Y-m-d 23:59:59', strtotime($request->to_date)));

            $AssetModel = tap($AssetModel->paginate(self::PAGINATION), function($paginatedInstance) use ($DefinitionManufacture){
                return $paginatedInstance->getCollection()->transform(function ($asset) use ($DefinitionManufacture){
                    return $asset->format($DefinitionManufacture);
                });
            });

            return $AssetModel;
        } catch (\Exception $e) {
            //Maybe send email if issue and display something nice to screen
        }
    }
}
