<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mutichoisechoise extends Model
{
    use HasFactory;

    protected $fillable = [
        'multichoise_id',
        'correct',
        'answer'
    ];

    public function multichoise()
    {
        return $this->belongsTo(multichoise::class);
    }
}