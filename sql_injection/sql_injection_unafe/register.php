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
      <form action="./action.php?action=register" method="POST">
        <h4 id="login_title">Register here</h4>

        <div class="form-group" style="margin-bottom: 26px !important">
          <label for="name" class="login_form_labels">Name</label>
          <input type="text" placeholder="Name" name="name" id="name" class="form-control" style="border-radius: 9px" required="required"
            autofocus="autofocus" autocapitalize="off" />
        </div>

        <div class="form-group" style="margin-bottom: 26px !important">
          <label for="email" class="login_form_labels">Email</label>
          <input type="text" placeholder="Email" name="email" id="email" class="form-control" style="border-radius: 9px" required="required"
            autofocus="autofocus" autocapitalize="off" />
        </div>

        <div class="form-group" style="margin-bottom: 26px !important">
          <label for="password" class="login_form_labels">Password</label>
          <input type="text" placeholder="Password" name="password" id="password" class="form-control" style="border-radius: 9px" required="required"
            autofocus="autofocus" autocapitalize="off" />
        </div>

        <div class="form-group" style="margin-bottom: 26px !important">
          <label for="confirm_password" class="login_form_labels">Confirm Password</label>
          <input type="text" placeholder="Confirm Password" name="confirm_password" id="confirm_password" class="form-control"
            style="border-radius: 9px" required="required" autofocus="autofocus" autocapitalize="off" />
        </div>

        <!-- <p class="alert alert-danger" t-if="False" style="border-radius: 5px; padding: 5px 10px; margin-top: 10px">
          error
        </p>
        <p class="alert alert-success" t-if="False" style="border-radius: 5px; padding: 5px 10px; margin-top: 10px">
          message
        </p> -->

        <div class="clearfix oe_login_buttons text-center mb-1">
          <button id="login_sumit" type="submit" class="btn btn-primary btn-block">
            Register
          </button>

          <!-- dont forget - signup_enabled -->
          <div class="justify-content-between mt-2 d-flex small">
            <!-- <a t-if="True" id="a_signup" href="">Don't have an account?</a> -->
            <a id="reset" href="./index.php">Login instead</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>