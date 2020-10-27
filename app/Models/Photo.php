<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
    ];

    protected $appends = [
        'uri',
    ];

    // Automatically delete file after model is deleted
    protected static function boot() {
        parent::boot();
        static::deleted(function(Photo $photo) {
            Storage::delete($photo->path);
        });
    }

    public function getUriAttribute() {
        return Storage::url($this->path);
    }
}
