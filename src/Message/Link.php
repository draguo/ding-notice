<?php

namespace Draguo\Ding\Message;


class Link implements Message
{
    const TYPE = 'link';
    private $message = [];
    private $params;

    public function __construct($message=[])
    {
        $this->message = $message;

        return $this;
    }

    public function getParams()
    {
        $this->setParams($this->message);

        return $this->params;
    }

    public function setUsers($users)
    {
        throw new \Exception('can not set user');
    }

    public function setParams(array $message)
    {
        $this->params['msgtype'] = self::TYPE;
        $this->params['link'] = $message;
    }
}