<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:57
 * 加载功能性页面
 */
class Action extends CI_Controller
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
            if ( ! file_exists(APPPATH.'/views/action/'.$page.'.php') and ! file_exists(APPPATH.'/views/action/'.$page))
            {
                show_404();
            }
            $this->load->view('/action/'.$page);
        }
    }

}
?>