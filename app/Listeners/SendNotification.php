<?php

namespace App\Listeners;

use App\Events\NewUser;
use App\Notifications\NewUserRegistered;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUser  $event
     * @return void
     */
    public function handle(NewUser $event)
    {
        $users = User::where('id', '<>', $event->user->id)->get();

        Notification::send($users, new NewUserRegistered($event->user));
    }
}
