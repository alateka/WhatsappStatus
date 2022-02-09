<?php

class Status
{
    private $db;

    public function __construct()
    {
        $this->db = SQLiteDB::getInstance()->getDatabase();
    }

    public function getUsers()
    {
        $sql = 'SELECT * FROM `users`;';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStatus()
    {
        $sql = 'SELECT * FROM `status`;';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setStatusToOne()
    {
        $sql = 'UPDATE status SET `status` = 1 WHERE id = 1;';
        $query = $this->db->prepare($sql);
        $query->execute();
    }

    public function getUsing()
    {
        $sql = 'SELECT * FROM `users` WHERE `using`LIKE 1;';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function usingWhatsApp($user)
    {
        $sql = 'UPDATE `users` SET `using` = false;';
        $query = $this->db->prepare($sql);
        $query->execute();

        $sql = 'UPDATE `users` SET `using` = true WHERE username = "'.$user.'";';
        $query = $this->db->prepare($sql);
        $query->execute();
    }
    public function setStatusToZero()
    {
        $sql = 'UPDATE `status` SET `status` = 0 WHERE id = 1;';
        $query = $this->db->prepare($sql);
        $query->execute();
    }
}