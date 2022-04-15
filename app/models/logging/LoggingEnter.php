<?php

namespace app\models\logging;

class LoggingEnter extends AbstractFacadeLogging
{
    private string $login;

    public function __construct(string $login)
    {
        parent::__construct();
        $this->path = ROOT . '/tmp/login.log';
        $this->login = $login;
    }

    public function execute()
    {
        $this->createText();
        $this->addStringToFile();
    }

    private function createText(): void
    {
        $this->text = 'Логин: ' . $this->login . '; Время входа: ' . date('Y-m-d H-i-s') . '; Ip-адрес: '. $_SERVER['REMOTE_ADDR'] . "\n";
    }
}