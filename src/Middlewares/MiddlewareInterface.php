<?php

namespace Prometheus\Middlewares;

use Prometheus\Messages\RequestInterface;
use Prometheus\Messages\ResponseInterface;
use Prometheus\Handlers\RequestHandlerInterface;

interface MiddlewareInterface {

    public function process(RequestInterface $request, RequestHandlerInterface $delegate): ResponseInterface;

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
}