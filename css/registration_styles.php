<?php
echo <<<style
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: #22B573;
  font-family: Roboto;
}

/* --- Registration form design --- */

#main_registration {
  position: relative;
}

#registration_container {
  /* border: 0; */
  height: auto;
  width: 300px;
  background: #fff;
  position: absolute;
  right: 60px;
  top: 110px;
  border-radius: 10px;
  box-shadow: 1px 8px 8px rgba(38, 38, 38, .2),
  -1px 8px 8px rgba(38, 38, 38, .2);
}

#frm_user_registration {
  width: 200px;
  margin: auto;
  margin-top: 34px;
  margin-bottom: 34px;
}

#txt_reg_fname,
#txt_reg_mname,
#txt_reg_lname,
#txt_reg_email,
#txt_reg_mobilenumber,
#txt_reg_username,
#txt_reg_password,
#btn_reg_submit {
  height: 34px;
  width: 200px;
  margin-bottom: 8px;
  font-size: 16px;
  border-radius: 4px;
}

#txt_reg_fname,
#txt_reg_mname,
#txt_reg_lname,
#txt_reg_email,
#txt_reg_mobilenumber,
#txt_reg_username,
#txt_reg_password {
  color: #1A1A1A;
  border: 1px solid #B3B3B3;
  padding-left: 5px;
}

#txt_reg_fname::placeholder,
#txt_reg_mname::placeholder,
#txt_reg_lname::placeholder,
#txt_reg_email::placeholder,
#txt_reg_mobilenumber::placeholder,
#txt_reg_username::placeholder,
#txt_reg_password::placeholder {
  color: #B3B3B3;
}

#btn_reg_submit {
  border: 0;
  background: #22B573;
  font-weight: bold;
  color: #fff;
  cursor: pointer;
}

#login_link {
  color: #0071BC;
  font-size: 14px;
  text-decoration: none;
}

.message_box {
  height: 60px;
  width: 300px;
  background: #fff;
  position: absolute;
  right: 60px;
  top: 40px;
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