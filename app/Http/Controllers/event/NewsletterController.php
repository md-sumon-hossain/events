<?php

namespace App\Http\Controllers\event;

use App\Events\UserSubscribed;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribeValidate;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    # need : route, controller, model, migrations, database, db name in .env 
    

    # only return the view of the page
    public function index(){
        return view('event.index');
    }



    # SOLID-> SRP
            # single responsibility-> To make the code more maintainable, easier to read and understand, easier to quickly extend the system with new functionalities without breaking the existing ones. To make the clean code.

            # SRP-> A class should have one and only one reason to change.

            #step-1: Make Form Request using an artisan command, it will create new request class 
                # cli -> php artisan make:request StoreSolid
            #step-2: now we will store our input data as we did always
                #we will request the input from the user but now we have a new request class which will do a specific and only one job we assigned, it will only be changed for only one reason. it will validate our data
            #step-3: in the form request file we need to make   authorize() method -> return true
            #step-4: in the    rules() method -> return the instructions we want to execute
            #step-5: In the controller    public function store( StoreSolid $request ){.....}, here we can call the custom form request, --> 'StoreSolid'




    # EVENT
            #step-1: make an event through terminal
                # php artisan make:event EventName (here it is , UserSubscribed)  , it will create a directory in the App folder named "Events" 
            #step-2: in the event file
                # Take a public variable ,   "public $variable"
                # IN the constructor pass the parameter , it means the public variable , and then call it ,   " $this->email= $email;"
            #step-3: in the controller
                # as we are storing any data we will request it , and as we are following the SOLID principles we will follow SRP
                # create the onject of that event class and assign the value as parameter
                    # event(new UserSubscribed($request->input('email')))



    # LISTENER
            #step-1: make a listener through terminal
                # php artisan make:listener ListenerName (here it is , EmailOwnerAboutSubscription)  , it will create a directory in the App folder named "Listeners" 
            #Step-2: in the lintener file , 
                # go to the handle method
                # call the event name which will be listened by this listener, here it is    public function handle(UserSubscribed $event){}
            #step-3: assign the work for the listeners
                # here, 1- store the mail in the db table   (query is in the listener file)
                        #2- email notifications to the users ( see the listener)





    # MAIL
            #step-1: make a mail method through terminal
                    # php artisan make:mail MailName (here it is , UserSubscriptionMessage)  , it will create a directory in the App folder named "Mail"
            #step-2: go to the mail directory folder and go to the build method
                    # change the view , this means the page we want to show in the mail
            #step-3: create a view blade for mail




    # REGISTER EVENT AND LISTENER
        #step-1: go to the App/providers/EventServiceProvider
            # register event and listener inside the $listen array
                #        EventName::class =>[
                #           ListenerName::class, ],
        
    
    public function subscribe(SubscribeValidate $request){
        # SubscribeValidate --- is SRP here,

        event( new UserSubscribed($request->input('email')));
        # no return view after creating or updating
        return back();


    }
}
