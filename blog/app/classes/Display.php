<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 14/12/2021
 * Time: 10:26
 */

namespace App\classes;


class Display
{
    public function index()
    {
        header('Location: pages/action.php?status=index');
    }

}