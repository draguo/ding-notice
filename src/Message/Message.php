<?php

namespace Draguo\Ding\Message;

abstract class Message implements MessageInterface
{
    protected $type;
    protected $params = [];
    protected $message;

    /**
     * Message constructor.
     * @param array|string $message
     */
    public function __construct($message=[])
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        $this->setParams($this->message);

        return $this->params;
    }

    /**
     * @param array|string $message
     */
    public function setParams($message)
    {
        $this->params['msgtype'] = $this->getType();
        $this->params[$this->getType()] = $this->formatParams($message);
    }

    /**
     * @param $message
     * @return array
     */
    abstract protected function formatParams($message);

    /**
     * @param array|string $users
     */
    public function setUsers($users)
    {
        if ($users == 'all') {
            $this->params['at'] = ['isAtAll' => true];
        } else {
            $this->params['at'] = ['atMobiles' => $users];
        }
    }
}
