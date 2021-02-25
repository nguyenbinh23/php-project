<?php

namespace NguyenCore;

use PDO;
use PDOException;

class Database
{
    private $host = DB_HOST;
    private $dbUser = DB_USER;
    private $dbName = DB_NAME;
    private $dbPass = DB_PASS;

    /**
     * 
     */
    private $dbh;
    private $error;
    private $stmt;
    public function __construct()
    {
        // Set DSN  
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        // Set options  
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        // Create a new PDO instanace 
        try {
            $this->dbh = new PDO($dsn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
    public static function query($query)
    {
        self::$stmt = self::$dbh->prepare($query);
        return self::$stmt;
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }


    /**
     * The Debut Dump Parameters methods dumps the the information that was contained in the Prepared Statement. 
     * This method uses the PDOStatement::debugDumpParams PDO Method.
     */
    public function debugDumpParams()
    {
        return $this->stmt->debugDumpParams();
    }
}
