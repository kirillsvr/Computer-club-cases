<?php


namespace app\models\curl;


class SenetConnectGet extends AbstractCurlResponse
{

    public function __construct(string $url, string $token)
    {
        parent::__construct($url);
        $this->header[] = "Authorization: Token $token";
    }

    public function execute(): array
    {
        $this->setCurlOpt();

        $data = curl_exec($this->curlInit);
        curl_close($this->curlInit);

        if ($data) {
            return json_decode($data, true);
        }else {
            throw new \Exception('Ошибка GET запроса!', 500);
        }
    }

    protected function setCurlOpt(): void
    {
        curl_setopt($this->curlInit, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curlInit, CURLOPT_URL, $this->url);
        curl_setopt($this->curlInit, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curlInit, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curlInit, CURLOPT_HEADER, 0);
    }
}