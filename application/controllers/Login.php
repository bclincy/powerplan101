<?php
/**
 * Created by PhpStorm.
 * User: bclincy
 * Date: 5/16/15
 * Time: 1:47 AM
 */
class login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }


    public function index()
    {
        $data['title']='Login'
        $this->load->view('includes/template', $data);
    }
    public function signin()
    {
        echo "hello";
//        $data['news'] = $this->news_model->get_news();

    }
}