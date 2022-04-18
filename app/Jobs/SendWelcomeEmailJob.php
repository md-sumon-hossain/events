<?php

namespace App\Jobs;

use App\mail\SendEmailWelcome;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use illuminate\Support\facades\mail;

class SendWelcomeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    # initializing a protected variable $details
    protected $details;

    # pass a parameter in the constructor , we have passed the private variable $name here,
    public function __construct( $details)
    {
        # this name belongs to the variable name;
        $this->details= $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->details['email'])->send(new SendEmailWelcome($this->details['name']));
    }
}
