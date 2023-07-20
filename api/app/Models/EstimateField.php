<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimateField extends Model
{
    use HasFactory;

    protected $table = 'estimate_fields';

    public function estimatePresetValues()
    {
        return $this->hasMany(EstimatePresetValue::class, 'estimate_field_id');
    }
}
