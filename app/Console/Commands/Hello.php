<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Hello {name=Quyen} {--L|lastname=Cao}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hello Description';

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
//        if ($name = $this->ask('Do you wish to continue?')) {
//            $name = $this->argument('name');
//            $lastname = $this->option('lastname');
//
//            $this->info('My name is ' . $name . ' and last name is ' .$lastname);
//        }

//        $headers = ['Name', 'Email'];
//
//        $users = User::all(['name', 'email'])->toArray();
//
//        $this->table($headers, $users);

        $this->line('Display this on the screen');
    }
}
