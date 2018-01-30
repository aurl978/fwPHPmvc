<?php

class App
{

    static $db = null;

    /**
     * @return Database|null
     */
    static function getDatabase()
    {
        if (!self::$db) {
            self::$db = new Database('root', '', 'dbriche'); // username, password, name of the database
        }
        return self::$db;
    }

}