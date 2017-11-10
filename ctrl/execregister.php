<?php

  include "..\model\\function_register_new_user.php";

  /* Session starten oder wieder aufnehmen */
  session_start();
  /* Falls Aufruf von Login-Seite */
  if(isset($_POST["username"]))
  {
  /* Falls Name und Passwort korrekt */

    if (insert_user_into_database($_POST)){
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["usernachname"] = $_POST["usernachname"];
      $_SESSION["uservorname"] = $_POST["uservorname"];
      $_SESSION["useremail"] = $_POST["useremail"];
      include "../view/page/register_newuser.php";
    
    }
  }
  /* Kontrolle, ob innerhalb der Session */
  if (!isset($_SESSION["username"]))
    include "../view/page/register_user_denied.php";

?>
