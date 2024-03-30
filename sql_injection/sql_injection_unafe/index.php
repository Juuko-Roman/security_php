<?php
require_once ("./action.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- bootsrap CSS -->
  <link href="sql_injection/bootstrap.css" rel="stylesheet" />

  <!-- YOUR CUSTOM CSS -->
  <link href="sql_injection/custom2.css" rel="stylesheet" />
</head>

<body>
  <div class="mt-5 mb-5 row w-100 mx-0">
    <div class="col-xl-3 col-sm-3 p-4 shadow mx-auto login_form_wrap rounded-4" style="padding: 50px 50px !important">
      <form action="./index.php?action=login" method="POST">
        <h4 id="login_title">Welcome back</h4>
        <div class="form-group" style="margin-bottom: 26px !important">
          <label for="email" class="login_form_labels">Email</label>
          <input type="text" placeholder="Email" name="email" id="login" value="<?php echo $email ?>" class="form-control" style="border-radius: 9px"
            required="required" autofocus="autofocus" autocapitalize="off" />
        </div>

        <div class="form-group" style="margin-bottom: 26px !important">
          <label for="password" class="login_form_labels">Password</label>
          <input type="text" placeholder="Password" name="password" id="login" value="<?php echo $password ?>" class="form-control"
            style="border-radius: 9px" required="required" autofocus="autofocus" autocapitalize="off" />
        </div>

        <?php if ($msg != "") { ?>
          <p class="alert alert-danger" t-if="False" style="border-radius: 5px; padding: 5px 10px; margin-top: 10px">
            <?php echo $msg ?>
          </p>
        <?php } ?>

        <div class="clearfix oe_login_buttons text-center mb-1">
          <button id="login_sumit" type="submit" class="btn btn-primary btn-block">
            Log in
          </button>

          <!-- dont forget - signup_enabled -->
          <div class="justify-content-between mt-2 d-flex small">
            <a t-if="True" id="a_signup" href="./register.php">Don't have an account?</a>
            <a id="reset" href="">Reset Password</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>