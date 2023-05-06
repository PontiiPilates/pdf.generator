<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDocument extends Mailable
{
    use Queueable, SerializesModels;

    protected $file_name;
    protected $title_email;
    protected $from_email;

    /**
     * Create a new message instance.
     *
     * @param string $file_name
     * @param string $title_email
     * 
     * @return void
     */
    public function __construct($file_name, $title_email)
    {
        $this->file_name = $file_name;
        $this->title_email = $title_email;
        $this->from_email = env('MAIL_FROM_ADDRESS');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $attach = storage_path("app/public/pdf/$this->file_name");
        return $this->from($this->from_email, $this->title_email)->markdown('templates.email')->attach($attach);
    }
}
