<?php

namespace Draguo\Ding;

interface Message
{
    public function text($text);

    public function markdown($text);

    public function notice($data);
}
