<?php 

use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Event;

$app->singleton('events', function ($app) {
    return (new Dispatcher($app))->setQueueResolver(function () use ($app) {
        return $app->make('Illuminate\Contracts\Queue\Factory');
    });
});

/************************************
* Register Event
************************************/
$listens = [
    'App\Events\ExampleEvent' => [
        'App\Listeners\ExampleListener',
    ],
];

foreach ($listens as $event => $listeners) {
    foreach ($listeners as $listener) {
        Event::listen($event, $listener);
    }
}
