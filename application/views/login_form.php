<?php
/**
 * Created by PhpStorm.
 * User: bclincy
 * Date: 5/15/15
 * Time: 1:37 PM
 */

?>
<div>
    <h1>Login</h1>
    <?php
    echo form_open('login/validate_credentials');
    echo form_input('email', 'email');
    echo form_password('password', 'Password');
    echo form_submit('submit', 'Login');
    echo anchor('login/signup', 'Create Account');
    ?>
</div>