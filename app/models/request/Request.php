<?php

namespace app\models\request;

interface Request
{
    public function execute(): array|string;
}