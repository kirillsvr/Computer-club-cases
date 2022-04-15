<?php

namespace app\models\curl;

use CurlHandle;

abstract class AbstractCurlResponse
{
    protected array $header = [
        "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5",
        "Cache-Control: max-age=0",
        "Connection: keep-alive",
        "Keep-Alive: 300",
        "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
        "Accept-Language: en-us,en;q=0.5",
        "Pragma: no-cache",
        "Pragma: no-cache",
        "Referer: " . DOMIAN,
        "Origin: " . DOMIAN,
    ];

    protected CurlHandle $curlInit;
    protected string $url;

    public function __construct(string $url)
    {
        $this->curlInit = curl_init();
        $this->url = DOMIAN . $url;
    }

    abstract public function execute();

    abstract protected function setCurlOpt(): void;

}