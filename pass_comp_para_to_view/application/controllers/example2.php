<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/28/18
 * Time: 4:57 PM
 */

class example2 extends CI_Controller
{
    public function more($a, $b, $c)
    {
        $rows = array(
            "a" => $a,
            "b" => $b,
            "c" => $c,
        );
        $view_params
            = array(
            'mega_title' => 'Codeigniter - Hello World',
            'title' => 'Welcome to Codeigniter',
            'rows' => $rows
        );
        $this->load->view('helloview', $view_params);
    }
}
