<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'elevate_general_setting';
    protected $primaryKey = 'key';

    public $timestamps = false;

    protected $fillable = [
        'key',
        'value'
    ];

    static function getValue($key)
    {
    	$result = self::where('key', $key)->first();
    	$getValue = ( !empty($result)  ? $result->value : '' );

    	return $getValue;
    }
}
