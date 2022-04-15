<?php

namespace app\models\curl;

class Authorization extends AbstractCurlResponse
{
    public function __construct(string $url)
    {
        parent::__construct($url);
    }

    public function execute(): string
    {
        $this->setCurlOpt();
        $data = curl_exec($this->curlInit);
        curl_close($this->curlInit);

        if (!$data){
            throw new \Exception('Ошибка авторизации, обратитесь к администратору!', 500);
        }

        return (json_decode($data, true))['token'];
    }

    protected function setCurlOpt(): void
    {
        curl_setopt($this->curlInit, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curlInit, CURLOPT_URL, $this->url);
        curl_setopt($this->curlInit, CURLOPT_HEADER, 0);
        curl_setopt($this->curlInit, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36');
        curl_setopt($this->curlInit, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curlInit, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($this->curlInit, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($this->curlInit, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curlInit, CURLOPT_POST, true);
        curl_setopt($this->curlInit, CURLOPT_POSTFIELDS, [
            "client_id" => CLIENT_ID,
            "grant_type" => GRANT_TYPE,
            "password" => PASSWORD,
            "username" => USERNAME
        ]);
    }
}