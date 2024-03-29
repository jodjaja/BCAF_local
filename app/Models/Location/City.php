<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location\Province;
use App\Models\Location\Subdistrict;
use App\Models\Master\Office;

class City extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $table = "city";

    public function office()
    {
        return $this->hasOne(\App\Models\Master\Office::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function subdistricts()
    {
        return $this->hasMany(Subdistrict::class);
    }

}
