<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello, User</title>
  <?php include("css/landing_page_styles.php"); ?>
</head>
<body>
  <main id="main_sign_out">
    <section id="sign_out_container">
      <section>
        <p><?php echo "Hi, {$_SESSION['username']}";?></p>
      </section>
      <button type="button" id="btn_sign_out" onclick="window.location.href = 'logout.php';">Sign Out</button>
    </section>
  </main>
</body>
</html>