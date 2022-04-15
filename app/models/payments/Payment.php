<?php

namespace app\models\payments;

interface Payment
{
    public function execute();
}