<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'number',
        'age',
        'country',
        'address',
        'illness',
        'file_path',
        'user_id',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
