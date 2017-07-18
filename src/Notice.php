<?php

namespace Draguo\Ding;

class Notice implements Message
{
    use HttpRequest;

    const URL = 'https://oapi.dingtalk.com/robot/send?access_token=';

    protected $api;

    public function __construct($token)
    {
        $this->api = self::URL.$token;
    }

    public function notice($content, $type = 'text')
    {
        $result = $this->{$type}($content);

        return $this->send($result);
    }

    public function text($content)
    {
        return $this->send([
                'msgtype' => 'text',
                'text' => [
                    'content' => $this->array2str($content),
                ],
            ]);
    }

    public function markdown($content)
    {
        return $this->send([
            'msgtype' => 'markdown',
            'markdown' => [
                'title' => is_array($content) ? $content['0'] : substr($content, 0, 5),
                'text' => $this->array2str($content),
            ],
        ]);
    }

    private function send($data)
    {
        return $this->post($this->api, $data);
    }

    /**
     * @param $data
     *
     * @return array
     */
    public function actionCard($data)
    {
        return [
            'msgtype' => 'actionCard',
            'actionCard' => [
                'title' => 2,
                'text' => $this->array2str($data),
            ],
        ];
    }

    private function array2str($arr)
    {
        if (is_array($arr)) {
            return implode("\n", $arr);
        }

        return $arr;
    }
}
