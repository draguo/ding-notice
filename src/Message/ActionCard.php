<?php

namespace Draguo\Ding\Message;

class ActionCard extends Message
{
    protected $type = 'actionCard';

    public function setUsers($users)
    {
        throw new \Exception('not support to user');
    }

    protected function formatParams($message)
    {
        return $message;
    }
}
