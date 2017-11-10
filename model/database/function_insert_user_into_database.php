<?php
function insert_user_into_database($udata){

  //:bool{
  /* Verbindung aufnehmen und Datenbank auswählen */
  $con = mysqli_connect("", "root", "", "viewinvest");
  /* SQL-Abfrage ausführen */
  //$sql="SELECT * FROM user where loginname='" ."$ulogin" . "' AND pwd='" ."$upwd'";


  $loginname=$udata['username'];
  $vname=$udata['uservorname'];
  $nname=$udata['usernachname'];
  $pwd=$udata['userp'];
  $emailadr=$udata['useremail'];
  $sql="INSERT INTO user".
         "(loginname, vname, nname, pwd, emailadr) VALUES(";
  $sql2="'$loginname','$vname','$nname','$pwd','$emailadr')" ;

  $sql=$sql.$sql2;
  //echo $sql;
  $res = mysqli_query($con, $sql);
  /* Anzahl Datensätze ermitteln und ausgeben */
  $num = mysqli_affected_rows($con);
  if ($num>0)
    return true;
  else {
    return false;
  }
};
?>
