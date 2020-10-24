<?php
include('config/db.php');
$connection = new db();

global $username_does_not_exist_err, $empty_username_err, $empty_password_err, $username_password_incorrect_err, $err_count;

if(isset($_POST['submit_login']))
{
  $id = "";
  $firstname = "";
  $middlename = "";
  $lastname = "";
  $email = "";
  $mobilenumber = "";
  $username = "";
  $password = "";
  $_password = "";
  
  $post_username = $_POST['txt_username'];
  $post_password = $_POST['txt_password'];
  $con = $connection->getConnection();

  $uname = mysqli_real_escape_string($con, $post_username);
  $pswrd = mysqli_real_escape_string($con, $post_password);

  $sql = $connection->login_user($uname, $pswrd);

  // Check if login form is empty
  if(!empty($post_username) && !empty($post_password))
  {
    $check_username_query = mysqli_query($con, "SELECT username FROM tbl_users WHERE username = '{$post_username}'");
    $check_username = mysqli_num_rows($check_username_query);
    
    // Check if username is registered
    if($check_username <= 0)
    {
      $username_does_not_exist_err = '<div class="message_box" onclick="this.style.display = \'none\';">
      <p class="message">Username does not exist.</p>
      <p class="click_to_close">(Click to close)</p></div>';
    } else {
      // Fetch user data
      while($row = $sql->fetch_array(MYSQLI_ASSOC)){
        $id = $row['id'];
        $firstname = $row['firstname'];
        $middlename = $row['middlename'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $mobilenumber = $row['mobilenumber'];
        $username = $row['username'];
        $_password = $row['password'];
      }

      // Verify password
      $password = password_verify($post_password, $_password);

      if($post_username === $username && $password)
      {
        header('Location: ./landing_page.php');
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['middlename'] = $middlename;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        $_SESSION['mobilenumber'] = $mobilenumber;
        $_SESSION['username'] = $username;

      } else {
        $username_password_incorrect_err = '<div class="message_box" onclick="this.style.display = \'none\';">
        <p class="message">Username or Password incorrect.</p>
        <p class="click_to_close">(Click to close)</p>
        </div>';
      }

    }

  } else {
    if(empty($post_username)){
      $empty_username_err = '<div class="message_box">
      <p class="message">Username field required</p>
      <p class="click_to_close">(Click to close)</p>
      </div>';
    }
    if(empty($post_password)){
      $empty_password_err = '<div class="message_box">
      <p class="message">Password field required</p>
      <p class="click_to_close">(Click to close)</p>
      </div>';
    }
  }
}
?>