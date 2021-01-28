<?php

namespace Prometheus\Middlewares;

use Prometheus\Messages\Response;
use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;
use Prometheus\Middlewares\MiddlewareInterface;
use Prometheus\Handlers\RequestHandlerInterface;

class BaseMiddleware implements MiddlewareInterface {

    public function process(RequestInterface $request, RequestHandlerInterface $delegate): ResponseInterface
    {
        $response = $delegate->dispatch($request);
        if (is_null($response)) {
            $response = new Response();
            $response->setBody($request->getBody());
        }
        $response = $this->handle($request, $response);
        return $response;
    }

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}