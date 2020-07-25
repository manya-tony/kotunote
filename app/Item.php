<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Item extends Model
{
    protected $fillable = [
        'text', 'record_id'
    ];

    // created_atのフォーマット
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format("Y-m-d");
    }
    // updated_atのフォーマット
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format("Y-m-d");
    }

    /**
     * リレーション：recordsテーブル
     */
    public function record()
    {
        return $this->belongsTo('App\Record');
    }
}
