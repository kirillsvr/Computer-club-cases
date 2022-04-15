<?php


namespace app\models\telegram;


class Telegram
{
    private $token = TELEGRAM_TOKEN;
    private $chatId = TELEGRAM_CHAT_ID;
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function makeMessage(): void
    {
        $str = "https://api.telegram.org/bot" . $this->token . "/sendMessage?chat_id=" . $this->chatId . "&text=" . urlencode($this->message);
        file_get_contents($str);
    }
}