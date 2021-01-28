<?php

namespace Prometheus\Middlewares;

use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;

class TestMiddleware extends BaseMiddleware {

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $body['test'] = 'add by TestMiddleware';
        $response->setBody($body);
        return $response;
    }
}