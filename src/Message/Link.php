<?php

namespace Draguo\Ding\Message;

class Link extends Message
{
    protected $type = 'link';

    protected function formatParams($message)
    {
        return $message;
    }

    public function setUsers($users)
    {
        throw new \Exception('not support to user');
    }
}
