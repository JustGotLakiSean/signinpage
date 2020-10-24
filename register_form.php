<?php include('./controllers/register.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("css/registration_styles.php"); ?>
  <title>Registration Form</title>
</head>
<body>
  <main id="main_registration">
    <?php echo $username_already_exist_err; ?>
    <?php echo $email_already_exist_err; ?>
    <section id="registration_container">
      <form action="" method="POST" id="frm_user_registration">
        <?php
        if($err_count === 1){
        echo "<input type='text' name='txt_reg_fname' id='txt_reg_fname' pattern='[a-zA-Z]+[a-zA-Z ]' minlength='2' maxlength='26' required placeholder='Firstname' value=$r_firstname />
        <input type='text' name='txt_reg_mname' id='txt_reg_mname' pattern='[a-zA-Z]+[a-zA-Z ]' minlength='2' maxlength='26' placeholder='Middle Name' value=$r_middlename />
        <input type='text' name='txt_reg_lname' id='txt_reg_lname' pattern='[a-zA-Z]+[a-zA-Z ]' minlength='2' maxlength='26' required placeholder='Lastname' value=$r_lastname />
        <input type='email' name='txt_reg_email' id='txt_reg_email' required placeholder='Email' value=$r_email />
        <input type='text' name='txt_reg_mobilenumber' id='txt_reg_mobilenumber' pattern='^[0-9]*$' placeholder='Mobile Number' value=$r_mobilenumber />
        <input type='text' name='txt_reg_username' id='txt_reg_username' pattern='[a-zA-Z]+[a-zA-Z0-9_]+' minlength='5' maxlength='15' required placeholder='Username' value=$r_username />
        <input type='password' name='txt_reg_password' id='txt_reg_password' pattern='^[a-zA-Z0-9@#&_]+' minlength='8' maxlength='32' required placeholder='Password' />
        <input type='submit' name='btn_reg_submit' id='btn_reg_submit' value='Sign Up' />
        <section id='login_link_container' align='center'>
          <a href='login_form.php' id='login_link'>Login existing account</a>
        </section>";
        } else if($err_count === 0){
          echo "<input type='text' name='txt_reg_fname' id='txt_reg_fname' pattern='[a-zA-Z]+[a-zA-Z ]' minlength='2' maxlength='26' required placeholder='Firstname' />
        <input type='text' name='txt_reg_mname' id='txt_reg_mname' pattern='[a-zA-Z]+[a-zA-Z ]' minlength='2' maxlength='26' placeholder='Middle Name' />
        <input type='text' name='txt_reg_lname' id='txt_reg_lname' pattern='[a-zA-Z]+[a-zA-Z ]' minlength='2' maxlength='26' required placeholder='Lastname' />
        <input type='email' name='txt_reg_email' id='txt_reg_email' required placeholder='Email' />
        <input type='text' name='txt_reg_mobilenumber' id='txt_reg_mobilenumber' pattern='^[0-9]*$' placeholder='Mobile Number' />
        <input type='text' name='txt_reg_username' id='txt_reg_username' pattern='[a-zA-Z]+[a-zA-Z0-9_]+' minlength='5' maxlength='15' required placeholder='Username' />
        <input type='password' name='txt_reg_password' id='txt_reg_password' pattern='^[a-zA-Z0-9@#&_]+' minlength='8' maxlength='32' required placeholder='Password' />
        <input type='submit' name='btn_reg_submit' id='btn_reg_submit' value='Sign Up' />
        <section id='login_link_container' align='center'>
          <a href='login_form.php' id='login_link'>Login existing account</a>
        </section>";
        }
        ?>
      </form>
    </section>
  </main>
</body>
</html>