<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\3\11 0011
 * Time: 13:17
 */

namespace Dbdatabase;

use \Idatabase;

class Pdo implements Idatabase
{
    protected $conn;

    function connect($host, $user, $pass ,$dbname){
        $dsn ="mysql:host=$host;dbname=$dbname";
        $conn = new \PDO($dsn, $user, $pass);
        $this->conn = $conn;
    }


    function query($sql){
        $res = $this->conn->query($sql);
        return $res;
    }

    function close(){
        unset($this->conn);
    }
}