<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use App\Mail\UserSubscriptionMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailOwnerAboutSubscription
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
     * @param  object  $event
     * @return void
     */


    # calling the handles event in the following method, here the event is UserSubscribed
    public function handle(UserSubscribed $event)
    {
        # assigning the work for the listeners
            # 1- storing the email in the database
                DB::table('newsletters')->insert([
                    'email'=>$event->email,
                ]);
            # 2- send email notifications to the subscribed users mail
                Mail::to($event->email)->send(new UserSubscriptionMessage);
    }
}
