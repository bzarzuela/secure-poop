<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UserCreate extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'user:create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';



	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$username = $this->ask('Username: ');
		$password = $this->ask('Password: ');

		$u = new User;
		$u->username = $username;
		$u->password = Hash::make($password);
		$u->save();

		$this->info('User ' . $u->id . ' created');
	}


}
