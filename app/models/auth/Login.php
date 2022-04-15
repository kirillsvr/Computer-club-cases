<?php


namespace app\models\auth;


use app\models\database\DBConnect;

class Login
{
    private string $login;
    private string $password;
    private ?array $user;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function login(){
        $this->sessionReset();
        $this->getUser();
        $this->checkUser();
        $this->checkPassword();
        $this->addToSession();
    }

    private function getUser(): void
    {
        $this->user = DBConnect::getRow('SELECT * FROM `users` WHERE `login` = ?', $this->login);
    }

    private function checkUser(): void
    {
        if (!$this->user) throw new \Exception("Такого пользователя не существует", 401);
    }

    private function checkPassword(): void
    {
        if (!password_verify($this->password, $this->user['password'])) throw new \Exception("Пароль неверный", 401);
    }

    private function sessionReset(): void
    {
        if (isset($_SESSION['login_session'])) unset($_SESSION['login_session']);
        if (isset($_SESSION['token'])) unset($_SESSION['token']);
    }

    private function addToSession(): void
    {
        $_SESSION['login_session'] = $this->user;
    }

}