<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'quiz_id',
        'name',
        'class'
    ];
    public function quiz()
    {
        return $this->belongsTo(quiz::class);
    }
    public function studentesayaswer()
    {
        return $this->hasMany(studentesayaswer::class);
    }
}