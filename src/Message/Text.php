<?php

namespace Draguo\Ding\Message;

class Text implements Message
{
    const TYPE = 'text';
    private $message;
    private $params;

    public function __construct($message='')
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
        // throw or append
        // TODO: Implement setUsers() method.
    }

    public function setParams($message)
    {
        $this->params = [
            'msgtype' => self::TYPE,
            'text' => [
                'content' => $this->message,
            ],
        ];
    }
}