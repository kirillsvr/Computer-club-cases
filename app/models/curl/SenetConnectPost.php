<?php


namespace app\models\curl;


class SenetConnectPost extends AbstractCurlResponse
{
    private ?array $date;

    public function __construct(string $url, string $token, ?array $date = [])
    {
        parent::__construct($url);
        $this->header[] = "Accept: application/json";
        $this->header[] = "Authorization: Token $token";
        $this->date = $date;
    }

    public function execute(): array
    {
        $this->setCurlOpt();

        $data = curl_exec($this->curlInit);
        curl_close($this->curlInit);

        if ($data) {
            return json_decode($data, true);
        }else{
            throw new \Exception('Ошибка POST запроса!', 500);
        }
    }

    protected function setCurlOpt(): void
    {
        curl_setopt($this->curlInit, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curlInit, CURLOPT_URL, $this->url);
        curl_setopt($this->curlInit, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curlInit, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curlInit, CURLOPT_HEADER, 0);
        curl_setopt($this->curlInit, CURLOPT_POST, true);
        curl_setopt($this->curlInit, CURLOPT_POSTFIELDS, $this->date);
    }
}