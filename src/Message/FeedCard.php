<?php

namespace Draguo\Ding\Message;

class FeedCard extends Message
{
    protected $type = 'feedCard';

    public function setUsers($users)
    {
        throw new \Exception('not support to user');
    }

    protected function formatParams($message)
    {
        return $message;
    }
}
