<?php

namespace Prometheus\Handlers;

use Prometheus\Middlewares\MiddlewareInterface;
use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;

interface RequestHandlerInterface {

    public function pipe(MiddlewareInterface $middleware);

    public function dispatch(RequestInterface $request);
}