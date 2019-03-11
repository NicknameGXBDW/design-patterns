<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\3\11 0011
 * Time: 13:17
 */

namespace Dbdatabase;

use \Idatabase;

class Mysqli implements Idatabase
{
    protected $conn;

    function connect($host, $user, $pass ,$dbname){
        $conn = mysqli_connect($host,$user,$pass,$dbname);
        $this->conn = $conn;
    }


    function query($sql){
        $res = mysqli_query($this->conn,$sql);
        return $res;
    }

    function close(){
        mysqli_close($this->conn);
    }
}