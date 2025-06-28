<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Import Str facade for slug generation

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug', // <--- Make sure 'slug' is here
        'shortdescription',
        'description',
        'price',
        'status',
        'image',
    ];

    /**
     * Get the route key for the model.
     * This tells Laravel to use the 'slug' column for route model binding,
     * instead of the default 'id'.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The "booted" method of the model.
     * This method is called once the model has been booted, allowing
     * you to register event listeners. We use it to auto-generate slugs.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // Generate a slug when a new product is being created
        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
            $originalSlug = $product->slug;
            $count = 1;
            // Ensure uniqueness: if slug already exists, append -1, -2, etc.
            while (static::where('slug', $product->slug)->exists()) {
                $product->slug = $originalSlug . '-' . $count++;
            }
        });

        // Regenerate slug if product name changes on update
        static::updating(function ($product) {
            // Check if 'name' attribute has been changed OR if slug is currently empty/null
            if ($product->isDirty('name') || empty($product->slug)) {
                $originalSlug = Str::slug($product->getOriginal('name') ?: $product->name); // Use original or current name
                $newSlug = Str::slug($product->name);
                $count = 1;

                // If the new slug is genuinely different or if it was empty, check uniqueness
                if ($newSlug !== $originalSlug || empty($product->slug)) {
                    while (static::where('slug', $newSlug)->where('id', '!=', $product->id)->exists()) {
                        $newSlug = $originalSlug . '-' . $count++;
                    }
                    $product->slug = $newSlug;
                }
            }
        });
    }

    /**
     * Define the relationship to the Category model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}