<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\3\11 0011
 * Time: 13:09
 */

Interface Idatabase
{
    function connect($host,$user,$pass,$dbname);
    function query($sql);
    function close();
}