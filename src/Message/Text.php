<?php

namespace Draguo\Ding\Message;

class Text extends Message
{
    protected $type = 'text';

    protected function formatParams($message)
    {
        return [
            'content' => $message
        ];
    }
}
