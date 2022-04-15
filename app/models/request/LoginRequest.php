<?php

namespace app\models\request;

class LoginRequest implements Request
{
    private array $request;
    
    public function __construct(array $request)
    {
        $this->request = $request;    
    }

    public function execute(): array
    {
        $this->checkLogin();
        $this->checkPassword();

        return $this->request;
    }
    
    private function checkLogin(): void
    {
        if(!isset($this->request['login']) && !preg_match("/^[a-zA-Z0-9]+$/", $this->request['login']))
        {
            throw new \Exception("Логин может состоять только из букв английского алфавита и цифр", 403);
        }
    }

    private function checkPassword(): void
    {
        if(isset($this->request['password']) && !preg_match("/^[a-zA-Z0-9]+$/", $this->request['password']))
        {
            throw new \Exception("Пароль может состоять только из букв английского алфавита и цифр", 403);
        }
    }
}