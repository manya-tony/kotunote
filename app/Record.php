<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Record extends Model
{
    protected $fillable = [
        'name', 'user_id', 'release'
    ];

    protected $hidden = [
        'created_at'
    ];

    // updated_atのフォーマット
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format("Y-n-j");
    }

    /**
     * リレーション：usersテーブル
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * リレーション：itemsテーブル
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
