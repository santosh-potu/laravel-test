<?php

namespace SantoshLaravel\Console\Commands;

use Illuminate\Console\Command;

class QuizStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz:start {user} {age?} {--difficulty=} {--istest=yes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
        $this->line("Some Text");
        $this->info("Hey, Watch this!");
        $this->comment("Just a comment passing by");
        $this->question("Whats ur name?");
        $this->error("ops,this shouldn't be happen");

        $user = $this->argument('user');
        $age = $this->argument('age');

        $difficulty = $this->option("difficulty");
        $istest = $this->option("istest");

        $this->info(" Your inputs $user $age $difficulty $istest");
        print_r($this->arguments());
        print_r($this->options());

        $name = $this->ask("What is ur name?");
        $pwd = $this->ask("What is your password?");

        $default = "Dayle";
        // Choices
        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'],1);
    
        // Confirmation

        if ($this->confirm('Is '.$name.' correct, do you wish to continue? [y|N]')) {
            //
            $this->line(" Thank you");
        }


    }
}
