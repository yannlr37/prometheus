<?php

namespace Prometheus\Messages;

abstract class Message {

    protected $uuid;
    protected $body = [];

    public function __construct()
    {
        $this->uuid = uniqid();
    }

    public function withUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function withBody($data)
    {
        $this->body[] = $data;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

}