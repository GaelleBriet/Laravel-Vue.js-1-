<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;

    protected $table = 'estimate';

    public function estimateLines()
    {
        return $this->hasMany(EstimatLines::class, 'estimate_id');
    }
}
