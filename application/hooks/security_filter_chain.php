<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-08
 * Time: 16:29
 */
class SecurityFilterChain {
    function do_filter($params)
    {
        $CI = &get_instance();
        $CI->load->library('session');
        //$CI->load->helper('url');
        $uri = $CI->uri->uri_string();

        foreach($params['should_not_filter'] as $not_filter)
        {
            if(preg_match($not_filter, $uri) == 1)
            {
                return;
            }
        }
        if($CI->session->userdata($params['logged_in_session_attr'])==null)
        {
            //show_error('您没有权限访问这个页面', 403);
            header("Location:".$params['quit_page']);
        }

//        foreach($params['need_admin_role'] as $need_admin)
//        {
//            if(preg_match($need_admin, $uri) == 1)
//            {
//                $current_user = $CI->session->userdata('current_user');
//                if(!isset($current_user['role_status']) or $current_user['role_status'] != 0)
//                {
//                    show_error('您没有权限访问这个页面', 403);
//                    return;
//                }
//                break;
//            }
//        }

    }
}