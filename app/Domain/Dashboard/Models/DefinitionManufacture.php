<?php

namespace App\Domain\Dashboard\Models;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Dashboard\Models\DataAsset;

class DefinitionManufacture extends Model
{
    protected $fillable = ['description'];

    protected $connection = 'mysql';

    protected $table = 'definition_manufacturers';

    public function assets() {
        return $this->belongsTo(DataAsset::class, 'id', 'manufacture_id');
    }
}
