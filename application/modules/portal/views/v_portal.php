
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>City_Dispora| </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>_assets/login/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>_assets/login/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>_assets/login/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST"  action="<?php echo base_url(); ?>Portal/ceklogin">
              <h1>Login</h1>
                <?php if(!empty($this->session->flashdata('failed'))) {
          echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert"aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button><center> username atau password tidak cocok </center></div>';
        }?>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button id="send" type="submit" class="btn btn-success">Submit</button>
                <!-- <a class="btn btn-default submit" href="#">Log in</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> E!</h1>
                  <p>©2018</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
  </body>
    <!-- jQuery -->
  <script src="<?php echo base_url(); ?>_assets/login/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>_assets/login/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
