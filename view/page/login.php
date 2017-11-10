<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include "../style/central.css" ?>

  </head>

  <body  class="zentriert">
    <main>
     <section style="margin-bottom:30px; width: 100%">
      <div style="display:table-cell; font-weight:bold; font-size:20px;width:50%">EvPAKK</div>
      <div style="display:table-cell;font-weight:bold; font-size:17px;width:50%">Investitonen im Blick</div>
    </section>

    <section  id="id_loginsect" class="umrahmt zentriert">
      <form action="execlogin.php" method="post">

      <p class="p_loginsec"><div>Name:</div><input name="username" class="inpfield"></p>
      <p class="p_loginsec"><div>Passwort:</div><input type="password" name="userp" class="inpfield"></p>

      <p class="p_loginsec"><input type="submit" value="Anmelden" class="inpfield"></p>

     </form>
   </section>
   <section style="display:table-row">
         <div style="display:table-cell"><p>Sie haben noch keinen Account?</p></div>
         <div style="display:table-cell;width:20%;padding:6px;"><a href="../view/page/register_newuser.php">Registrieren</a></div>
   </section>
 </main>
</body>
</html>
