<?php
/**
 * Created by PhpStorm.
 * User: bclincy
 * Date: 5/15/15
 * Time: 12:47 PM
 */

class Login extends CI_Controller {
    function index()
    {
        $data['main_content'] = 'login_form';
        $data['title']="PowerPlan101 :: Success Starts with a mindset";
        $this->load->view('includes/templates.php', $data);
    }
}