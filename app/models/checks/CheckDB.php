<?php


namespace app\models\checks;

use app\models\database\DBConnect;

class CheckDB
{
    public static function checkUserOne($id, $sale){
        $user = DBConnect::getAll("SELECT * FROM sale WHERE account_id = ? AND sale IN ($sale)", array($id));
        if (!$user){
            return true;
        }
        return false;
    }

    public static function checkTime($id, $sale){
        $user = DBConnect::getAll("SELECT * FROM sale WHERE account_id = ? AND sale = ?", array($id, $sale));
        if (!$user){
            return false;
        }
        $last = array_pop($user);
        $last = preg_replace('#\.#', '-', $last['payment_date']);
        return preg_replace('#([0-9]{2})$#', "20$1", $last);
    }

    public static function getAllPayments($id, $sale){
        $payments = DBConnect::getAll("SELECT * FROM sale WHERE account_id = ? AND sale IN ($sale)", array($id));
        if (!$payments){
            return false;
        }
        return $payments;
    }

}