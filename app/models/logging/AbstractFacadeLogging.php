<?php

namespace app\models\logging;

abstract class AbstractFacadeLogging
{
    protected string $path;
    protected string $text;
    protected LogData $data;

    public function __construct()
    {
        $this->data = new LogData();
    }

    abstract public function execute();

    protected function addStringToFile()
    {
        $this->data->setPath($this->path);
        $this->data->setText($this->text);
        $this->data->execute();
    }
}