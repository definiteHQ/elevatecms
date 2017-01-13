<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

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
        'parent_id',
        'order',
    ];

    protected $dates = ['deleted_at'];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function child()
    {
        $this->hasMany(self::class, 'parent_id', 'id');
    }
}
