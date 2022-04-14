<?php

namespace App\Http\Controllers\doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    #  CREATE MODEL FACTORIES
    
        # step-1: Run any of the cli below:
            # php artisan make:factory FactoryNameFactory  . or  . php artisan make:factory FactoryName --model=ModelName
        #step-2: define the definition method in the factory 
            #       return[ ]
        #step-3: Use name space of Str in the factory
        #step-4: Write the root directory before the model name like below
            # protected $model = \App\Models\ModelName::class
        #step-5: use tinker by the cli     .    php artisan tinker
        #step-6: In the terminal , using the tinker we can use the factoey cli's are given below:
            #   \App\models\ModelName::factory()->create();
            #   \App\models\ModelName::factory()->count(20)->create();    if we want to create a specific number of data
}
