<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['post_controller_constructor'] = array(
    'class'    => 'SecurityFilterChain',
    'function' => 'do_filter',
    'filename' => 'security_filter_chain.php',
    'filepath' => 'hooks',
    'params'   => array(
        'logged_in_session_attr' => 'userid',
        'quit_page' => '/quit',
        'should_not_filter' => array('/^$/','/^index$/','/^login$/','/^look\/.*$/','/^quit$/', '/^register$/','/^search$/'),
        //'need_admin_role' => array('/^//user$/', '/^//user//.*$/', '/^//role$/', '/^//role//.*$/')
    )
);
