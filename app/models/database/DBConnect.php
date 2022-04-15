<?php


namespace app\models\database;


use const CONF;

class DBConnect{

    public static $dbh = null;

    public static $sth = null;

    public static $query = '';

    public static function getDbh()
    {
        if (!self::$dbh) {
            try {
                self::$dbh = new \PDO(
                    DB_DSN,
                    DB_USER,
                    DB_PASS,
                    array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
                );
                self::$dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
            } catch (\PDOException $e) {
                exit('Error connecting to database: ' . $e->getMessage());
            }
        }

        return self::$dbh;
    }

    public static function add($query, $param = array())
    {
        self::$sth = self::getDbh()->prepare($query);
        return (self::$sth->execute((array) $param)) ? self::getDbh()->lastInsertId() : 0;
    }

    public static function getAll($query, $param = array())
    {
        self::$sth = self::getDbh()->prepare($query);
        self::$sth->execute((array) $param);
        return self::$sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getRow($query, $param = array())
    {
        self::$sth = self::getDbh()->prepare($query);
        self::$sth->execute((array) $param);
        return self::$sth->fetch(\PDO::FETCH_ASSOC);
    }

}