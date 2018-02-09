<?php

namespace Draguo\Ding\Message;

interface Message
{
    // api 发送的数据
    public function getParams();

    public function setUsers($users);
}