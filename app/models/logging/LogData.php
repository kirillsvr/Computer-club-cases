<?php

namespace app\models\logging;

use app\models\e;
use Exception;

class LogData
{
    private string $path;
    private string $text;

    private $file;

    public function execute(): void
    {
        try {
            $this->openFile();
            $this->writeToFile();
            $this->closeFile();
        }catch (Exception $e) {
            throw new Exception("Логирование не выполнено", 500);
        }
    }

    private function openFile(): void
    {
        $this->file = fopen($this->path, 'a+');
    }

    private function writeToFile(): void
    {
        fwrite($this->file, $this->text);
    }

    private function closeFile(): void
    {
        fclose($this->file);
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }
}