<?php 

namespace App\Events;

use App\Models\User;

class ExampleEvent extends Event
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function getUserName()
	{
		return $this->user->name;
	}
}
