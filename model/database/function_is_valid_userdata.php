<?php
function check_database_is_valid_userdata($ulogin, $upwd){
  //:bool{
  /* Verbindung aufnehmen und Datenbank auswählen */
  $con = mysqli_connect("", "root", "", "viewinvest");
  /* SQL-Abfrage ausführen */
  $sql="SELECT * FROM user where loginname='" ."$ulogin" . "' AND pwd='" ."$upwd'";
  //echo $sql;
  $res = mysqli_query($con, $sql);
  /* Anzahl Datensätze ermitteln und ausgeben */
  $num = mysqli_num_rows($res);
  if($num > 0) return true;
  else  return false;

};
?>
