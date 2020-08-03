<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ChangeEmail extends Notification
{
    use Queueable;

    public $token; 

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('メールアドレス変更 | '.config('app.name'))
                    ->line('メールアドレス変更のご連絡です。以下のボタンから手続きを完了してください。')
                    ->action('メールアドレス変更', url('mypage/reset', $this->token))
                    ->line('※有効期限は60分です。')
                    ->line('※有効期限が切れた場合はもう一度はじめからからお手続きを行ってください。');
    }
}
