<?php

namespace Prometheus\Messages;

use Prometheus\Constants\Status;

class Request extends Message implements RequestInterface {

    public function __construct()
    {
        parent::__construct();
    }

}