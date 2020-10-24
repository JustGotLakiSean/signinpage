<?php include('./controllers/login.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("css/login_styles.php"); ?>
  <title>Login Page</title>
</head>

<body>
  <main id="main_login">
    <?php echo $username_password_incorrect_err; ?>
    <?php echo $username_does_not_exist_err; ?>
    <?php echo $empty_username_err; ?>
    <?php echo $empty_password_err; ?>
    <section id="login_container">
      <form action="" method="POST" id="frm_user_login">
        <input type="text" pattern="[a-zA-Z]+[a-zA-Z0-9_]+" name="txt_username" id="txt_username" required placeholder="Username" />
        <input type="password" pattern="^[a-zA-Z0-9@#&_]+" name="txt_password" id="txt_password" required placeholder="Password" />
        <input type="submit" name="submit_login" id="submit_login" value="Login" />
        <section id="sign_up_link_container" align="center">
          <a href="register_form.php" id="sign_up_link">Sign up new account</a>
        </section>
      </form>
    </section>
  </main>
</body>

</html>