<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multichoise extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question',
        'media'
    ];

    public function quiz()
    {
        return $this->belongsTo(quiz::class);
    }
    public function mutichoisechoise()
    {
        return $this->hasmany(mutichoisechoise::class);
    }
}