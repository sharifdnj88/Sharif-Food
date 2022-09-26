<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationUserNotification extends Notification
{
    use Queueable;
    public $id;
    private $name;
    private $email;
    private $subject;
    private $date;
    private $time;
    private $message;
    private $type;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->id = $data->reservation_id;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->subject = $data->subject;
        $this->date = $data->date;
        $this->time = $data->time;
        $this->message = $data->message;
        $this->type = $data->type;
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
                ->line('Hi ' . $this->name .', Your Reservation Request is Pending,We will contact with you soon.')
                ->line('Thank you.');
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
