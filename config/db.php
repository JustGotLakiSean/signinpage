<?php
class db
{
  CONST HOST = 'localhost';
  CONST USERNAME = 'root';
  CONST PASSWORD = '';
  CONST DATABASE = 'signin_db';

  private $con;

  public function __construct()
  {
    $this->con = $this->getConnection();
  }

  public function getConnection()
  {
    $connection = new \mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);
    if(mysqli_connect_errno())
    {
      trigger_error("Database connection problem.");
    }

    $connection->set_charset("utf8");
    return $connection;
  }

  public function register_user($firstname, $middlename, $lastname, $email, $mobilenumber, $username, $password)
  {
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $con = $this->getConnection();
    $sql_query = "INSERT INTO tbl_users(firstname, middlename, lastname, email, mobilenumber, username, password)
    VALUES('{$firstname}', '{$middlename}', '{$lastname}', '{$email}', '{$mobilenumber}', '{$username}', '{$password_hash}')";
    $sql = $con->query($sql_query);
    if($sql){
      return true;
    } else {
      return mysqli_error($con);
    }
  }

  public function check_username($check_username)
  {
    $con = $this->getConnection();
    $sql_query = "SELECT username FROM tbl_users WHERE username = '{$check_username}'";
    $sql = $con->query($sql_query);
    if($sql)
    {
      return $sql;
    } else {
      return mysqli_error($con);
    }
  }

  public function login_user($username)
  {
    $con = $this->getConnection();
    $sql_query = "SELECT * FROM tbl_users WHERE username = '{$username}'";
    $sql = $con->query($sql_query);
    if($sql)
    {
      return $sql;
    } else {
      return mysqli_error($con);
    }
  }

  public function display_db()
  {
    $con = $this->getConnection();
    $sql_query = "SELECT * FROM tbl_users";
    $sql = $con->query($sql_query);
    if($sql){
      return $sql;
    } else {
      return mysqli_error($con);
    }
  }
}
