<?php

namespace Draguo\Ding\Message;

class Markdown extends Message
{
    protected $type = 'markdown';

    protected function formatParams($message)
    {
        return $message;
    }
}
