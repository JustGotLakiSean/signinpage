<?php

echo <<<style
<style type="text/css">
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: #22B573;
  font-family: Roboto;
}

/* --- Login form design --- */

#main_login {
  position: relative;
}

#login_container {
  /* border: 0; */
  height: auto;
  width: 300px;
  background: #fff;
  position: absolute;
  right: 60px;
  top: 220px;
  border-radius: 10px;
  box-shadow: 1px 8px 8px rgba(38, 38, 38, .2),
  -1px 8px 8px rgba(38, 38, 38, .2);
}

#frm_user_login {
  width: 200px;
  margin: auto;
  margin-top: 30px;
  margin-bottom: 30px;
}

#txt_username, #txt_password, #submit_login {
  height: 34px;
  width: 200px;
  margin-bottom: 8px;
  font-size: 16px;
  border-radius: 4px;
}

#txt_username::placeholder, #txt_password::placeholder {
  color: #B3B3B3;
}

#txt_username, #txt_password {
  color: #1A1A1A;
  border: 1px solid #B3B3B3;
  padding-left: 5px;
}

#submit_login {
  border: 0;
  background: #22B573;
  font-weight: bold;
  color: #fff;
  cursor: pointer;
}

#sign_up_link {
  color: #0071BC;
  font-size: 14px;
  text-decoration: none;
}

/* --- End Login --- */

.message_box {
  height: 60px;
  width: 300px;
  background: #fff;
  position: absolute;
  right: 60px;
  top: 150px;
  border-radius: 5px;
  border: 2px solid #ff6b6b;
  padding: 10px;
}

.message {
  margin: 0;
  padding: 0;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  color: #1A1A1A;
}

.click_to_close {
  color: #1A1A1A;
  margin: 0;
  padding: 0;
  text-align: center;
  font-size: 12px;
}

</style>
style;
?>