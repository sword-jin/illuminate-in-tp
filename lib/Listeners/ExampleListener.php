<?php 

namespace App\Listeners;

class ExampleListener
{
	public function handle($event)
	{
		dump($event->getUserName());
	}
}
