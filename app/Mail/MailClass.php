<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $tel;
    protected $email;
    protected $massage;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $email,  $massage)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
        $this->massage = $massage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layots.mail')
            ->with([
                'name' => $this->name,
                'tel' => $this->tel,
                'email' => $this->email,
                'massage' => $this->massage,
            ])
            subject('Новое письмо');
    }
}
