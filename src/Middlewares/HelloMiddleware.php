<?php

namespace Prometheus\Middlewares;

use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;

class HelloMiddleware extends BaseMiddleware {

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $body['hello'] = 'Hello You';
        $response->setBody($body);
        return $response;
    }
}