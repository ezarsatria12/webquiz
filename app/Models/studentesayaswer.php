<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentesayaswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'quiz_id',
        'esay_id',
        'student_id',
        'answer'
    ];
    public function quiz()
    {
        return $this->belongsTo(quiz::class);
    }
    public function student()
    {
        return $this->belongsTo(student::class);
    }
    public function esay()
    {
        return $this->belongsTo(student::class);
    }
}