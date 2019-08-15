<?php

namespace Anker1992\ChinaStockData\Sources;

use GuzzleHttp\Client;

trait Clientable
{
    protected $guzzleOptions = [];

    public function getHttpClient()
    {
        return new Client($this->guzzleOptions);
    }
}
