<?php

namespace Draguo\Ding\Message;


class FeedCard implements Message
{

    const TYPE = 'feedCard';
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
        throw new \Exception('not support to user');
    }

    public function setParams(array $message)
    {
        $this->params['msgtype'] = self::TYPE;
        $this->params[self::TYPE] = $message;
    }
}