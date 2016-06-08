<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-07
 * Time: 22:28
 */
class FavoriteModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function favorite($userid,$mid)
    {

    }
    public function cancelFavorite($userid,$mid)
    {

    }
}