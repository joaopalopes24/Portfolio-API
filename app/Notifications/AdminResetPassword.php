<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminResetPassword extends Notification
{
    use Queueable;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Password Notification')
            ->success()
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('RESET PASSWORD', url(config('app.url').route('password.reset',['token' => $this->token,'email' => $notifiable->getEmailForPasswordReset(),], false)))
            ->line('This password reset link will expire in 60 minutes. If you did not request a password reset, no further action is required.');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}