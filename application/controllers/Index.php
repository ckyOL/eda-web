<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-05-29
 * Time: 14:57
 */
class Index extends CI_Controller
{
    public function index()
    {
        //echo 'hello';
        header('location:pages/index');
    }
}
?>