<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\CustomVerifyEmail;
use App\Notifications\CustomResetPassword;
use App\Notifications\PasswordUpdate;
use App\Notifications\Unsubscribe;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use MustVerifyEmail, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * リレーション：recordsテーブル
     */
    public function records()
    {
        return $this->hasMany('App\Record');
    }

    /**
     * 通知：メールアドレス確認
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomVerifyEmail);
    }

    /**
     * 通知：パスワードリセット
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
    }

    /**
     * 通知：パスワード変更
     */
    public function sendPasswordUpdateNotification()
    {
        $this->notify(new PasswordUpdate);
    }

    /**
     * 通知：退会完了
     */
    public function sendUnsubscribeNotification()
    {
        $this->notify(new Unsubscribe);
    }
}
