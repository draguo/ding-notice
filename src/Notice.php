<?php

namespace Draguo\Ding;

use Draguo\Ding\Message\Message;
use Draguo\Ding\Message\Text;

class Notice
{
    use HttpRequest;

    const URL = 'https://oapi.dingtalk.com/robot/send?access_token=';

    protected $api;
    protected $users;

    public function __construct($token)
    {
        if (!$token) {
            throw new \Exception('invaild token');
        }
        $this->api = self::URL . $token;

        return $this;
    }

    public function send($message)
    {
        if (is_string($message)) {
            $message = new Text($message);
        }

        if (!$message instanceof Message) {
            throw new \Exception('message must instanceof message');
        }

        if ($this->users) {
            $message->setUsers($this->users);
        }

        return $this->post($this->api, $message->getParams());
    }

    /**
     * @param string|array $users
     * 所有人的传 all
     * @return $this
     */
    public function to($users = null)
    {
        if ($users == 'all') {
            $this->users = 'all';
            return $this;
        }

        if (is_array($users) ){
            $this->users = implode(',', $users);
        }

        return $this;
    }
}
