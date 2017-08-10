<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class rename extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:rename {from : Name of table to rename} {to : New name for table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rename Table';

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
        $from = $this->argument('from');
        $to = $this->argument('to');

        DB::statement('RENAME TABLE ' . $from . ' TO ' . $to);

        $this->info('Table ' . $from . ' is now rename to ' . $to);
    }
}
