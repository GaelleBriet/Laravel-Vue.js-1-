<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimatePresetValue extends Model
{
    use HasFactory;

    protected $table = 'estimate_preset_values';

    public function estimateField()
    {
        return $this->belongsTo(EstimateField::class, 'estimate_field_id');
    }
}
