<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/28/18
 * Time: 4:26 PM
 */

class Hello extends CI_Controller
{

    public function index()
    {

        $view_params
            = array(
            'mega_title' => 'Codeigniter - Hello World',
            'title' => 'Welcome to Codeigniter',
            'message' => 'Hello World'
        );
        $this->load->view('helloview', $view_params);
    }
}
