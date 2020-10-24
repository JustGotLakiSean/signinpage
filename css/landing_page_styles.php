<?php

echo <<<style

<style type="text/css">
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: #fff;
  font-family: Roboto;
}

/* --- Sign Out button design --- */

#main_sign_out {
  /* position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);*/
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

#sign_out_container {
  /* border: 0; */
  /* position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);*/
}

#btn_sign_out {
  border: 0;
  background: #22B573;
  font-weight: bold;
  height: 80px;
  width: 200px;
  font-size: 22px;
  border-radius: 4px;
  cursor: pointer;
  color: #fff;
}

</style>

style;
?>