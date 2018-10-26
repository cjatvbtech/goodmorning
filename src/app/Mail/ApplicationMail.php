<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Application;

class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $application;

    /**
     * Create a new message instance.
     * 
     * @param Application $application The application model object
     *
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from = ['address' => 'support@goodmorning.com', 'name' => 'Goodmorning Support'];
        $view = 'mails.applications.' . $this->application->status;
        return $this->from($from)->view($view, ['application' => $this->application]);
    }
}
