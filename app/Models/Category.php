<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'elevate_category';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'excerpt',
        'image',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'paren_id',
        'order',
    ];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function child()
    {
        $this->hasMany(self::class, 'parent_id', 'id');
    }
}
