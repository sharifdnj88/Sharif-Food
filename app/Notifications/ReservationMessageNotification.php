<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationMessageNotification extends Notification
{
    use Queueable;
    private $name;
    private $email;
    private $subject;
    private $date;
    private $time;
    private $message;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($said)
    {
        $this -> name       = $said -> name;
        $this -> email       = $said -> email;
        $this -> subject     = $said -> subject;
        $this -> date         = $said -> date;
        $this -> time         = $said -> time;
        $this -> message    = $said -> message;
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
                    // ->line('Hi '. $this -> name . ' Welcome to our company')
                    ->line('Name: '. $this -> name)
                    ->line('Email: '. $this -> email)
                    ->line('Subject: '. $this -> subject)
                    ->line('Date: '. $this -> date)
                    ->line('Time: '. $this -> time)
                    ->line('Message: '. $this -> message)
                    // ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
