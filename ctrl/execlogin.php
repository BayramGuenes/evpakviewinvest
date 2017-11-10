<?php

include "..\model\\function_is_valid_login.php";

/* Session starten oder wieder aufnehmen */
session_start();
/* Falls Aufruf von Login-Seite */
if(isset($_POST["username"]))
{
/* Falls Name und Passwort korrekt */

  if (is_valid_login($_POST["username"] , $_POST["userp"])){
    $_SESSION["username"] = $_POST["username"];
    include "../view/page/main.php";
  }
}
/* Kontrolle, ob innerhalb der Session */
if (!isset($_SESSION["username"]))
  include "../view/page/login_denied.php";

?>
