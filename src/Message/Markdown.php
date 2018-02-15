<?php

namespace Draguo\Ding\Message;

class Markdown implements Message
{
    const TYPE = 'markdown';
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
        // todo
    }

    public function setParams(array $message)
    {
        $this->params['msgtype'] = self::TYPE;
        $this->params['markdown'] = $message;
    }
}