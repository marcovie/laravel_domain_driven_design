<?php

namespace App\Domain\Dashboard\Models;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Dashboard\Models\DefinitionManufacture;

class DataAsset extends Model
{
    protected $fillable = ['manufacturer_id', 'description', 'data_purchased'];

    protected $connection = 'mysql';

    protected $table = 'data_assets';

    public function format($manufaturers) {//this incase want to format certain fields for display
        return [
            'id'                    => $this->id,
            'manufacture_id'        => $this->manufacture_id,
            'manufacturer'          => (isset($manufaturers[$this->manufacture_id]))?$manufaturers[$this->manufacture_id]['description']:'Unknown',
            'description'           => $this->description,
            'date_purchased'        => $this->date_purchased,
            'created_at'            => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at'            => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }

    public function manufacture() {
        return $this->hasMany(DefinitionManufacture::class, 'manufacture_id', 'id');
    }
}
