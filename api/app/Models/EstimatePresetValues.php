<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimatePresetValues extends Model
{
    use HasFactory;

    protected $table = 'estimate_preset_values';

    public function estimateFields()
    {
        return $this->belongsTo(EstimateFields::class, 'estimate_field_id');
    }
}
