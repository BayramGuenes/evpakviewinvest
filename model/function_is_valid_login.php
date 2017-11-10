<?php

  include "..\model\database\\function_is_valid_userdata.php";

  function is_valid_login($ulogin, $upwd){
  //function is_valid_login($ulogin, $upwd):bool{

    return check_database_is_valid_userdata($ulogin, $upwd);

  }

?>
