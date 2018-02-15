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
        if ($users == 'all') {
            $this->params['at'] = ['isAtAll' => true];
        } else {
            $this->params['at'] = ['atMobiles' => $users];
        }

    }

    public function setParams($message)
    {
        $this->params['msgtype'] = self::TYPE;
        $this->params[self::TYPE] = [
            'content' => $message
        ];
    }
}