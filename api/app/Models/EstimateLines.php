<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimateLines extends Model
{
    use HasFactory;

    protected $table = 'estimate_lines';

    public function estimate()
    {
        return $this->belongsTo(Estimate::class, 'estimate_id');
    }
}
