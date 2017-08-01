<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ActivateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:activate {email} {password} {--admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activates a user with the given E-Mail address to be able to log-in to the system.';

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
        $u = User::where('email', $this->argument('email'))->firstOrFail();
        $u->can_login = true;
        $u->admin = $this->option('admin');
        $u->password = Hash::make($this->argument('password'));
        $u->save();

        $this->info('Success');

    }
}
