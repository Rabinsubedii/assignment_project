<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'image',
        'type',
        'recommendations',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->title);

            // To ensure uniqueness if needed:
            $originalSlug = $event->slug;
            $count = 1;

            while (static::where('slug', $event->slug)->exists()) {
                $event->slug = $originalSlug . '-' . $count++;
            }
        });
    }
}
