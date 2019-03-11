<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\3\11 0011
 * Time: 13:08
 */

namespace Dbdatabase;

use \Idatabase;

class Mysql implements Idatabase
{
    protected $conn;

    function connect($host, $user, $pass ,$dbname){
        $conn = mysql_connect($host,$user,$pass);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }


    function query($sql){
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close(){
        mysql_close($this->conn);
    }
}