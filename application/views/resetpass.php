<div class = "container">
    <div class="wrapper">
        <?=$this->session->flashdata('message');?>
    <form action="<?php echo site_url('updatepass')?>" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Reset Password</h3>
        <hr class="colorgraph"><br>

        <?php
        $info = $this->session->flashdata('info');
        if (!empty($info)){
        echo $info;
        }
        ?>

        <input type="password" class="form-control" name="password" placeholder="Password" required="" />       

        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required="" />       

        <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Send Reset Link" type="Submit">Send Reset Link</button>     
    </form>   
    </div>
    </div>
