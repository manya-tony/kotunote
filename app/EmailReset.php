<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ChangeEmail;

class EmailReset extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_id', 'new_email', 'token',
    ];

    /**
     * 通知：メールアドレス確定
     */
    public function sendEmailResetNotification($token)
    {
        $this->notify(new ChangeEmail($token));
    }

    /**
     * 通知：新しいメールアドレスあてにメールを送信
     */
    public function routeNotificationForMail($notification)
    {
        return $this->new_email;
    }
}
