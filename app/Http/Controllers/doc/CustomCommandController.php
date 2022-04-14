<?php

namespace App\Http\Controllers\doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomCommandController extends Controller
{
    #  CREATE CUSTOM COMMAND
    
        # step-1: Run any of the cli below:
            # php artisan make:command CommandName -> this will create a new command in App/Console/commands Commands and we have to write the signature method here.  
            # And    php artisan make:make:command CommandName --command=create:name , this will take the signature name automatically from the command 

        #step-2: edit the 'handle' method , the instructions we want to execute . in this example we have added a factory model in the description method

        #step-3: Must have model and migration
        #step-4: in the description method , we can write the massage fater executing the command 
}
