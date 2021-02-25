<?php

namespace NguyenCore;

use ErrorException;
use NguyenCore\Database as DB;


class NguyenModel
{
    private $modelName;
    
    public function __construct()
    {
    }

    //set Model Name
    public function setSourceName($modelName)
    {
        $this->modelName = $modelName;
    }

    public function findFirst($id)
    {
        try {
            $query = DB::query('SELECT * FROM ' . $this->modelName . ' WHERE id = ' . $id);
            return $query->execute();
        } catch (ErrorException $e) {
            var_dump($e->getMessage());
            exit;
        }
    }
}
