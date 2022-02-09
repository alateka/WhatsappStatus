<?php

/**
 * Manejo de MySQL mediante PDO
 */

class SQLiteDB
{
    private static $instancia = null;
    private $db = null;

    private function __construct()
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];

        try {
            $this->db = new PDO('sqlite:'.__DIR__.'/whatsapp_status.sqlite');

        } catch (PDOException $e) {
            exit('ERROR: La base de datos es inalcanzable');
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new SQLiteDB();
        }

        return self::$instancia;
    }

    public function getDatabase()
    {
        return $this->db;
    }
}
