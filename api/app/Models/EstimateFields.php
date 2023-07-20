<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimateFields extends Model
{
    use HasFactory;

    protected $table = 'estimate_fields';

    public function estimatePresetValues()
    {
        return $this->hasMany(EstimatePresetValues::class, 'estimate_field_id');
    }
}
