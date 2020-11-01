<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = [
        'first',
        'second',
        'third',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
