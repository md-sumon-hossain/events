<?php

namespace App\Http\Controllers\event;

use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmailJob;
use App\Http\Controllers\Controller;

class QueueJobController extends Controller
{
    # in this tutorial we have make a hard coded simple queue and job wxamples . here we have to give the input form the controller by hard coded. this is our queue and job "part-1"


    #Step-1:  configure queue
        # there arw so manay queue driver named. sync, database, radis, sqs etc. we well work with database here.
        # open the (.env) file and make the DB_CONNECTION = database.   by default it reaimns sync
        # to create queue table run the following command
            #    php artisan queue:table
            #    php artisan migrate      . this is to migrate the table to the db

    
    #Step-2: Create mailable class
        # we need to go to the (.env file ) and set up the mail configuration
        # create a mailable class named anything we link . nut here we have given SendEmailWelcom. by running the following command,
            # php artisan make:mail SendEmailWelcome
        # open this mail class file
            # call a private variable $name. in the construcuor pass the parameter $name and assign by $this-> name= $name
        # in the build method 
            # return view an email balde from resources / views
            # can also pas the subject or name etc
    
            
    # Step-3: Create Email view blade

    # Step-4: Create a Queue Job;
        # Run Cli;
        # php artisan make:job JobName. here(SendWelcomeEmailJob)
        # open this job file in the App/ jobs
        # Add two more namespace 
            # use App\Mail\SendEmailWelcome (Mauilable class)
            # use Illuminate\Support\facades\Mail
        # initialize a protected variable #details
        #  pass the $details as a constructor parameter and assign by $this

        # in the handle method
            #  write the following code :
                #  Mail::to($this->details['email'])->send(new SendEmailWelcome($this->details['name']));
    

    # Step-5: Call Queue jobs
        # create a controller and amke a route
        # in the controller call the method decleared in the route and hard code the followings
            # { 
            #    $details['name]='abc'; 
            #    $details['name]='abc@gmail.com';
            #    dispatch(new SendWelcomeEmailJob($details));
            #    dd('sent');
            # }
            # in this code we have assigned a name and an email for this job . and the dispatch  method for the job 

    # Step -6: check the job 
        # run the cli: 
            # php artisan queue:work
            # the output will show us wheather the job is processed or not


    





















    public function jobs(){
        $details['name']='sumon';
        $details['email']='sumon@gmail.com';

        dispatch(new SendWelcomeEmailJob($details));
        dd('sent');
    }
}
