<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotMakingMoneyYet extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $request)
    {
        //
        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->request->email, $this->request->name)
                    ->markdown('emails.users.inactive');
    }
}
