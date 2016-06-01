<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 17:29
 */
class Look extends CI_Controller
{
    public function _remap($method, $params = array())
    {
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        else
        {
            $page=$method;
            if ( ! file_exists(APPPATH.'/views/'.$page.'.php') and ! file_exists(APPPATH.'/views/'.$page))
            {
                show_404();
            }
            $this->load->view('/'.$page);
        }
    }

}
?>