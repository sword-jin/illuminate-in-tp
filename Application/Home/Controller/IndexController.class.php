<?php

namespace Home\Controller;

use App\Models\User;
use Think\Controller;
use App\Events\ExampleEvent;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;

class IndexController extends Controller 
{
    public function index()
    {
		Event::fire(new ExampleEvent(User::first()));

		$users = Cache::remember('users', 5, function () {
			return User::all();
		});

		dump($users);
    }
}