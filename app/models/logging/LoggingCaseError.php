<?php

namespace app\models\logging;

class LoggingCaseError extends AbstractFacadeLogging
{
    private string $prize;

    public function __construct(string $prize)
    {
        parent::__construct();
        $this->path = ROOT . '/tmp/case_errors.log';
        $this->prize = $prize;
    }

    public function execute()
    {
        $this->createText();
        $this->addStringToFile();
    }

    private function createText(): void
    {
        $this->text = 'Ошибка сохранения в бд. Логин: ' . $_SESSION['phone'] . '; Приз: ' . $this->prize . '; Чек: ' . $_SESSION['desc'] . ';  Время выигрыша: ' . date('Y-m-d H-i-s') . '; Ip-адрес: '. $_SERVER['REMOTE_ADDR'] . "\n";
    }
}