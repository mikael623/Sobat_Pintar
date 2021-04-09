<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/css/css_login.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">

<body>
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/logo_2.png" alt="AdminLTELogo" height="100" width="100">
    </div> -->
    <div class="container">
        <div class="wrapper">
            <form action="<?php echo site_url('login') ?>" method="post" name="Login_Form" class="form-signin">
                <h3 class="form-signin-heading">Selamat Datang silahkan Login</h3>
                <hr class="colorgraph"><br>



                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus value="<?= set_value('username') ?>" />
                <?php form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="password" class="form-control" name="password" placeholder="Password" required />
                <?php form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">Login</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>