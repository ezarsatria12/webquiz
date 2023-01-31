<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matchingansweranswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'matchinganswer_id',
        'answer'
    ];
    public function matchinganswer()
    {
        return $this->belongsTo(mmatchinganswer::class);
    }
}