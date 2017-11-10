<?php
include "..\model\database\\function_insert_user_into_database.php";

function register_new_user($usrdata):bool{
//function is_valid_login($ulogin, $upwd):bool{

  return insert_user_into_database($usrdata);

}
?>
