<?php

use Prometheus\Messages\Request;
use Prometheus\Messages\Response;
use Prometheus\Handlers\Dispatcher;
use Prometheus\Middlewares\TestMiddleware;
use Prometheus\Middlewares\HelloMiddleware;
use Prometheus\Middlewares\ZboubMiddleware;

require_once 'vendor/autoload.php';

$body = [
    'firstname' => 'Yann',
    'lastname' => 'LA ROSA'
];

$request = new Request;
$request->withBody($body);

$dispatcher = new Dispatcher();
$dispatcher->pipe(new TestMiddleware());
$dispatcher->pipe(new HelloMiddleware());
$dispatcher->pipe(new ZboubMiddleware());
$response = $dispatcher->dispatch($request);

dd($response);
