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

    /**
     * Notice constructor.
     * @param string $token
     * @throws \Exception
     */
    public function __construct($token)
    {
        if (!$token) {
            throw new \Exception('invalid token');
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

        $response = $this->post($this->api, $message->getParams());
        if ($response->errcode != 0) {
            throw new \Exception(json_encode($response));
        }

        return $response;
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
        }
        if (is_string($users)) {
            $this->users = explode(',', $users);
        }
        if (is_array($users)) {
            $this->users = $users;
        }

        return $this;
    }
}
