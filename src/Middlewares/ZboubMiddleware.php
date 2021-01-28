<?php

namespace Prometheus\Middlewares;

use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;

class ZboubMiddleware extends BaseMiddleware {

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $body['zboub'] = 'Zboub !!';
        $response->setBody($body);
        return $response;
    }
}