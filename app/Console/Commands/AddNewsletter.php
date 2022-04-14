<?php

namespace App\Console\Commands;

use App\Models\Newsletter;
use Illuminate\Console\Command;

class AddNewsletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:newsletter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates new newsletter';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newsletter=Newsletter::factory()->create();
        $this->info(" newsletter added successfully "); 

       
       # $this->info(" newsletter added successfully "); --> green text
       # $this->warn(" newsletter added successfully "); --> orange text
       # $this->error(" newsletter added successfully ");--> red text
       # $this->line(" newsletter added successfully "); --> normal text

    }
}
