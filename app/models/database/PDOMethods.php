<?php

namespace app\models\database;

use app\models\logging\LoggingCaseError;

class PDOMethods
{
    public static function getLastPrizes(): array
    {
        return DBConnect::getAll('
            SELECT sale.id, sale.prize_id, first_case_prize.*, color.color as color_name FROM sale
                INNER JOIN first_case_prize ON sale.prize_id = first_case_prize.id
                LEFT JOIN color ON first_case_prize.color = color.id
            WHERE sale = "Лотерея"
            ORDER BY sale.id DESC LIMIT 9');
    }

    public static function getPrizes(string $table): array
    {
        return DBConnect::getAll("
            SELECT {$table}.*, color.color as color_name FROM {$table}
                LEFT JOIN color ON {$table}.color = color.id");
    }

    public static function getPrizesForDate(): array
    {
        return DBConnect::getAll("SELECT * FROM (SELECT *, STR_TO_DATE(payment_date, '%H:%i %d.%m.%y') as date FROM sale) A WHERE date > DATE_SUB(NOW(), INTERVAL 24 HOUR) AND sale = 'Лотерея'");
    }

    public static function setInfoForCaseMoney(array $status, string $case): void
    {
        $stat = DBConnect::add("
            INSERT INTO `sale` (`sale`, `phone`, `account_id`, `sum`, `check_code`, `payment_date`, `admin`, `ip_admin`, `chek_for_case`, `case_number`) 
                VALUES (?,?,?,?,?,?,?,?,?,?)",
            array('Лотерея', $_SESSION['phone'], $_SESSION['user'], $status['data']['check_amount'], $status['data']['check_code'], $status['data']['payment_date'], $_SESSION['login_session']['login'], $_SERVER['REMOTE_ADDR'], $_SESSION['desc'], $case)
        );

        if (!$stat) (new LoggingCaseError($status['data']['check_amount']))->execute();
    }

    public static function setInfoForCaseGoods(string $prize, string $case): void
    {
        $stat = DBConnect::add("
            INSERT INTO `sale` (`sale`, `phone`, `account_id`, `sum`, `check_code`, `payment_date`, `admin`, `ip_admin`, `product`, `chek_for_case`, `case_number`)
                VALUES (?,?,?,?,?,?,?,?,?,?,?)",
            array('Лотерея', $_SESSION['phone'], $_SESSION['user'], '', '', date('H:i d.m.y'), $_SESSION['login_session']['login'], $_SERVER['REMOTE_ADDR'], $prize, $_SESSION['desc'], $case)
        );

        if (!$stat) (new LoggingCaseError($prize))->execute();
    }
}