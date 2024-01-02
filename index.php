<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/logout_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

    
    
    <form action="includes/login.inc.php" method="post">
    <h3>
  <?php
    login_inputs()
  ?>
    </h3>
  
    </form>

<?php
check_login_form();
?>



    <form action="includes/signup.inc.php" method="post">
  <?php
    signup_appear();
  ?>
    </form>
    
    <?php
  check_signup_errors();
  ?>

<form action="includes/logout.inc.php" method="post">
  <?php
    logout();
  ?>
</form>

</body>
</html>