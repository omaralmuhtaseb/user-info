<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\UserWelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $user): void
    {
        Mail::to($user->email)->send(new UserWelcomeEmail());
    }
}
