<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-05-29
 * Time: 12:03
 */
class Pages extends CI_Controller
{
    public function _remap($method, $params = array())
    {
        //$method = 'process_'.$method;
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

    public function index()
    {
        //echo 'hello';
        $this->load->view('/index');
    }
}
?>