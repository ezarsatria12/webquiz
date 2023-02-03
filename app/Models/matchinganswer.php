<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matchinganswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'matching_id',
        'question',
    ];

    public function matching()
    {
        return $this->belongsTo(matching::class);
    }
    public function matchingansweranswer()
    {
        return $this->hasOne(matchingansweranswer::class);
    }
}