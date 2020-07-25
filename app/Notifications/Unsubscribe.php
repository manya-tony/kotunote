<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Unsubscribe extends Notification
{
    use Queueable;

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
     * 通知：パスワード変更
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject('退会手続きが完了しました | '.config('app.name'))
                ->line('退会手続きが完了いたしました。')
                ->line('ご利用ありがとうございました。');
    }

}
