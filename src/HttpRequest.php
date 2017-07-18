<?php

namespace Draguo\Ding;

use GuzzleHttp\Client;

trait HttpRequest
{
    protected function post($uri, $params = [])
    {
        $client = new Client();

        return $client->post($uri, [
            'json' => $params,
        ])->getBody()->getContents();
    }
}
