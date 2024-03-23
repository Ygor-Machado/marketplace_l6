<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug', 'logo'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
}
