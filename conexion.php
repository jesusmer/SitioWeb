<?php
class Conexion extends mysqli_fetch
{
    public function __constructor()
    {
        
        $host="127.0.0.1";
        $username="root";
        $passwd="";
        $dbname="udom";
        $port="3306";
        parent:: __constructor($host,$username,$passwd,$dbname,$port);
    }
    public function __constructor1($host,$username,$passwd,$dbname,$port)
    {
       parent:: __constructor($host,$username,$passwd,$dbname,$port);
    }
}
$cnn = new Conexion();
var_dump($cnn);