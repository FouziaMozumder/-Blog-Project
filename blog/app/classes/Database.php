<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 14/12/2021
 * Time: 10:08
 */

namespace App\classes;

class Database
{
    private $hostName;
    private $password;
    private $username;
    private $dbName;
    private $link;

    protected function connect()
    {
        $this->hostName = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbName   = 'blog';
        $this->link     = mysqli_connect($this->hostName,$this->username,$this->password,$this->dbName);
        if($this->link)
        {
            return $this->link;
        }
        else
        {
            die('connection failed');
        }
    }
}