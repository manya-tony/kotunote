<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
// use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\VerifyEmail;


class CustomVerifyEmail extends VerifyEmail
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('本登録をお願いいたします | '.config('app.name'))
                    ->line('本登録のご連絡です。以下のボタンから本登録を完了してください。')
                    ->action('本登録', $this->verificationUrl($notifiable))
                    ->line('※お心当たりのない場合は削除してください。');
    }
}
