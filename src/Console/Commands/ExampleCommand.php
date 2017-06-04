<?php

namespace Ridrog\Boilerplate\Console\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boilerplate:command 
                                  {argument1 : Argument 1 required} 
                                  {argument2? : Argument 2 optional}
                                  {argument3=default : Argument 3 optional with: } 
                                  
                                  {--f|--force : Option Force} 
                                  {--id=* : Multiple Values allowed}
                            ';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Boilerplate Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Retrieve  all arguments
        $arguments = $this->arguments();

        // Retrieve all options
        $options = $this->options();

        // Print table with all users
        $this->printTable();

        // Show Progressbar while iterating over all user
        $this->showProgressBar();

        $this->info("Done, with doing nothing!");
        $this->info("The Argument #1: ". $this->argument('argument1'));
        $this->info("The Argument #2: ". $this->argument('argument2'));
        $this->info("The Argument #2: ". $this->argument('argument3'));

        if($this->option('force')){
            $this->info("Running Command with the Force Option");
        };

        $this->info("Your name is: ". $this->askForName());

        $this->askForConfirmation();
    }

    /**
     * Examlpe ask for Someting
     *
     * @return string
     */
    public function askForName()
    {
        return $this->ask('What is your name?');
    }

    public function askForConfirmation()
    {
        if ($this->confirm('Do you wish to continue?')) {
            $this->line('Continue');
        } else {
            $this->error("Stop");
        }
    }

    /**
     * Example Print a Table
     */
    public function printTable()
    {
        $headers = ['Name', 'Email'];

        $users = \App\User::all(['name', 'email'])->toArray();

        $this->table($headers, $users);
    }

    /**
     * Example Progressbar
     */
    public function showProgressBar()
    {
        $users = \App\User::all();

        $bar = $this->output->createProgressBar(count($users));

        foreach ($users as $user) {
            // $this->performTask($user);

            $bar->advance();
        }

        $bar->finish();
    }
}
