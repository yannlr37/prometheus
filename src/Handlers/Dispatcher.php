<?php

namespace Prometheus\Handlers;

use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;
use Prometheus\Middlewares\MiddlewareInterface;

class Dispatcher implements RequestHandlerInterface {

    protected $index = 0;
    protected $middlewares = [];

    public function getNextMiddleware()
    {
        if (isset($this->middlewares[$this->index])) {
            return $this->middlewares[$this->index];
        }
        return null;
    }

    public function pipe(MiddlewareInterface $middleware)
    {
        array_unshift($this->middlewares, $middleware);
    }

    public function dispatch(RequestInterface $request)
    {
        $middleware = $this->getNextMiddleware();
        $this->index++;
        if (is_null($middleware)) {
            return null;
        } else {
            return $middleware->process($request, $this);
        }
    }
}