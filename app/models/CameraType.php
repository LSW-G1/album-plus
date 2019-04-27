<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CameraType extends Model
{
    // Choose Table name
    public $table = "camera_types";

    // No created_at nor updated_at columns
    public $timestamps = false;

    // Every column can be modified
    protected $guarded = [];

    /**
     * A Camera Type has many Images
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
