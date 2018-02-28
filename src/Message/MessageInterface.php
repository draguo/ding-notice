<?php

namespace Draguo\Ding\Message;

interface MessageInterface
{
    public function getParams();

    public function setUsers($users);
}
