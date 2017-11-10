<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php


      const CO_CREATE ="create";
      const CO_DISPLAY ="display";
      if (!isset($_SESSION["username"]))
        $modus=CO_CREATE;
      else
        $modus=CO_DISPLAY;

      if ($modus==CO_CREATE )
        include_once "../../style/central.css";
      else{
        include "../style/central.css";
      }
    ?>

  </head>

  <body  class="zentriert">


    <main>
     <section style="margin-bottom:10px; width: 100%">
      <div style="display:table-cell; font-weight:bold; font-size:20px;width:50%">EvPAKK</div>
      <div style="display:table-cell;font-weight:bold; font-size:17px;width:50%">Investitonen im Blick</div>
    </section>

    <section  id="id_loginsect" class="umrahmt zentriert">
      <form action="..\..\ctrl\execregister.php" method="post">

        <?php
           if ($modus==CO_DISPLAY)
             echo "<h2>registrierter Benutzer</h2>" ;
          else {
             echo "<h2>Benutzer anlegen</h2>";
          }   ?>



      <p class="p_loginsec"><div>Name:</div><input name="usernachname" class="inpfieldlong"
        <?php
           if(isset($_SESSION["usernachname"]))
             $value1=$_SESSION["usernachname"];
           if ($modus==CO_DISPLAY && isset($value1)) echo " value='$value1'" ?>
      >
      </p>
      <p class="p_loginsec"><div>Vorname:</div><input name="uservorname" class="inpfieldlong"
        <?php
           if(isset($_SESSION["uservorname"]))
             $value2=$_SESSION["uservorname"];
           if ($modus==CO_DISPLAY && isset($value2)) echo " value='$value2'" ?>
        ></p>
      <p class="p_loginsec"><div>email-Adr:</div><input type="text" name="useremail" class="inpfieldlong"
        <?php
           if(isset($_SESSION["useremail"]))
             $value3=$_SESSION["useremail"];
           if ($modus==CO_DISPLAY && isset($value3)) echo " value='$value3'" ?>
      ></p>
      <p class="p_loginsec"><div>email-Adr-wiederholen:</div><input type="text" name="useremail2" class="inpfieldlong"></p>

      <p class="p_loginsec"><div>Login-Name:</div><input name="username" class="inpfield"
        <?php
           if(isset($_SESSION["username"]))
             $value=$_SESSION["username"];
           if ($modus==CO_DISPLAY && isset($value)) echo " value='$value'" ?>
        ></p>

      <p class="p_loginsec"><div>Passwort:</div><input type="password" name="userp" class="inpfield"></p>

      <p class="p_loginsec"><div>Passwort wiederholen:</div><input type="password" name="userp2" class="inpfield"></p>

      <?php if  ($modus== CO_CREATE )
        echo "<p class='p_loginsec'><input type='submit' value='Anlegen' class='inpfield'></p>";
      else
        echo "<p class='p_loginsec'><input type='submit' value='Ändern' class='inpfield'>  <a style='padding-left:20px;' href=''>Zur Anwendung</a></p>";
      ?>
      </form>
   </section>

 </main>
</body>
</html>
