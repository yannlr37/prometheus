<?php

namespace Prometheus\Messages;

use Prometheus\Constants\Status;

class Response extends Message implements ResponseInterface {

    protected $status;

    public function __construct()
    {
        $this->status = Status::SUCCESS;
        parent::__construct();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}