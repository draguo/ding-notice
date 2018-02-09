<?php

namespace Draguo\Ding\Message;

class ActionCard implements Message
{
    public function getParams()
    {
        return [
            'msgtype' => 'actionCard',
            'actionCard' => [
                'title' => 2,
                'text' => $this->array2str($data),
            ],
        ];
        // TODO: Implement getParams() method.
    }

    public function setUsers($users)
    {
        // TODO: Implement setUsers() method.
    }
}