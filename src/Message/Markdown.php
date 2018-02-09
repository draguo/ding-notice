<?php

namespace Draguo\Ding\Message;

class Markdown implements Message
{
    public function getParams()
    {
        // TODO: Implement getParams() method.

        return $this->send([
            'msgtype' => 'markdown',
            'markdown' => [
                'title' => is_array($content) ? $content['0'] : substr($content, 0, 5),
                'text' => $this->array2str($content),
            ],
        ]);
    }

    public function setUsers($users)
    {
        // TODO: Implement setUsers() method.
    }
}