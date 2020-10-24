<?php
include('config/db.php');
$connection = new db();

global $username_already_exist_err, $email_already_exist_err, $user_registration_success, $err_count;
$err_count = 0;

if (isset($_POST['btn_reg_submit'])) {
  $firstname = $_POST['txt_reg_fname'];
  $middlename = $_POST['txt_reg_mname'];
  $lastname = $_POST['txt_reg_lname'];
  $email = filter_var($_POST['txt_reg_email'], FILTER_VALIDATE_EMAIL);
  $mobilenumber = $_POST['txt_reg_mobilenumber'];
  $username = $_POST['txt_reg_username'];
  $password = $_POST['txt_reg_password'];

  $con = $connection->getConnection();
  $username_check_query = "";
  $username_check = "";
  $email_check_query = "";
  $email_check = "";

  // For form inputs cleaning and storing to db
  $_firstname = "";
  $_middlename = "";
  $_lastname = "";
  $_email = "";
  $_mobilenumber = "";
  $_username = "";
  $_password = "";

  // Check if username already exist
  $username_check_query = mysqli_query($con, "SELECT * FROM tbl_users WHERE username = '{$username}'");
  $username_check = mysqli_num_rows($username_check_query);

  // Check if email already exist
  $email_check_query = mysqli_query($con, "SELECT * FROM tbl_users WHERE email = '{$email}'");
  $email_check = mysqli_num_rows($email_check_query);

  // Verify if form inputs are not empty
  if (!empty($firstname) && !empty($middlename) && !empty($lastname) && !empty($email) && !empty($mobilenumber) && !empty($username) && !empty($password)) {
    // Check if username already exist
    if ($username_check > 0) {
      $err_count = 1;
      $username_already_exist_err = "<div class='message_box' onclick='this.style.display = \"none\";'>
      <p class='message'>Username already exist</p>
      <p class='click_to_close'>(Click to close)</p>
      </div>";
      $r_firstname = $firstname;
      $r_middlename = $middlename;
      $r_lastname = $lastname;
      $r_email = $email;
      $r_mobilenumber = $mobilenumber;
      $r_username = $username;
      // Check if email already exist
    } else if ($email_check > 0) {
      $err_count = 1;
      $email_already_exist_err = '<div class="message_box" onclick="this.style.display = \'none\';">
      <p class="message">Email already exist.</p>
      <p class="click_to_close">(Click to close)</p>
      </div>';
      $r_firstname = $firstname;
      $r_middlename = $middlename;
      $r_lastname = $lastname;
      $r_email = $email;
      $r_mobilenumber = $mobilenumber;
      $r_username = $username;
    } else {
      $err_count = 0;
      $_firstname = mysqli_real_escape_string($con, $firstname);
      $_middlename = mysqli_real_escape_string($con, $middlename);
      $_lastname = mysqli_real_escape_string($con, $lastname);
      $_email = mysqli_real_escape_string($con, $email);
      $_mobilenumber = mysqli_escape_string($con, $mobilenumber);
      $_username = mysqli_real_escape_string($con, $username);
      $_password = mysqli_real_escape_string($con, $password);

      $sql = $connection->register_user($_firstname, $_middlename, $_lastname, $_email, $_mobilenumber, $_username, $_password);
      if ($sql) {
        header('location: ./login_form.php');
      } else {
        printf("%s\n", $connection->error);
      }
    }
  }
}
