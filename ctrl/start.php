<?php
/* Vor Beenden der Session wieder aufnehmen */
  session_start();

/* Beenden der Session */
  session_destroy();
  $_SESSION = array();

  if (!isset($_SESSION["username"])){
    include "../view/page/login.php";
  }
  else {
    include "../view/page/main.php";
  }
?>
