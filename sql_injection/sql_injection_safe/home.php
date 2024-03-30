<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Home</title>
</head>

<body>
 <h1>Hello
  <?php echo $_SESSION['username'] ?> Welcome, 😎
 </h1>
 <a id="login_sumit" href='./index.php' class="btn btn-primary btn-block">
  Log out
 </a>
</body>

</html>