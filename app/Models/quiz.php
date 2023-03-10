<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'quiz_id',
        'category_id',
        'quiztitle',
        'quizdesc',
        'media'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function multichoise()
    {
        return $this->hasMany(multichoise::class);
    }
    public function matching()
    {
        return $this->hasMany(matching::class);
    }
    public function esay()
    {
        return $this->hasMany(esay::class);
    }
    public function student()
    {
        return $this->hasMany(student::class);
    }
    public function studentesayaswer()
    {
        return $this->hasMany(studentesayaswer::class);
    }
    
}