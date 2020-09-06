<?php
function logIP()
{
     $ipLog="logfile.htm";
     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];
     $date=date ("l dS of F Y h:i:s A");
     $log=fopen("$ipLog", "a+");
     if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
     {
          fputs($log, "Logged IP address: ^^  $ip   ||-|| Date logged: $date<br>");
     }
     else fputs($log, "Logged IP address: ^^  $ip   ||-|| Date logged: $date\
     	");
     fclose($log);
}
logIp();
?>


<html>
<title> Admin Panel </title>
<head> 
     <body> 

          <link rel="stylesheet" type="text/css" href="style.css">
          <script type="text/javascript" src="secu.js"></script>

          <center>
<h1> Web Admin Panel </h1>
</center>
<h2> Administration PotatoKlan</h2>

<ul id="navigation">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="http://localhost/phpmyadmin/index.php" title="PhpMyAdmin">PhpMyAdmin</a></li>
  <li><a href="#" title="En dev">En dev</a></li>
  <li><a href="#" title="En dev">En dev</a></li>
  <li><a href="#" title="En dev">En dev</a></li>
</ul>

<center> 

<p> Bienvenue sur l'interface d'administration du serveur PotatoKlan </p>

</center>

<style>
#copyr
{
position: absolute;
bottom: 50px;
right: 50px;
border: 2px;
font-family: times new roman;
}
#contact
{
color: #FFFFFF;
}
   p { color: #FF0000; }
   background-color { color: #000000; }
   h1 { color: #1f3d7a; }
   h2 { color: #ff0000; }
   h3 { color: #00cc99; }
   h4 { color: #FFFFFF; }
   small { color: #FFFFFF; text-align: bottom}

</style>

<h4> prénom : <?= $pseudo ?> \\ email : <?= $email ?> \\ âge :<?= $age ?> </h4>

<?php

if(isset($_POST['formsend'])){
          echo "votre pseudo : ", $pseudo ,"<br/>";
          echo "votre âge : ",$_POST['age'] , "<br/>";
          echo "votre email : ",$_POST['email'];
     }
?>

<p id="contact"> pour toutes demandes, contactez moi à l'adresse yann.berlemont@pm.me </p>

<form>
     <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
     <input type="text" name="age" id="age" placeholder="Votre âge">
     <input type="text" name="email" id="email" placeholder="Votre email">
     <input type="submit" name="formsend" id="formsend">
</form>


<footer>
     <center>

     <small id ="copyr" style="border-color: #FF0000 #00FF00 #0000FF #ffffff; border-style:solid">&copy; Copyright 2020, PotatoKlan. Domain by TweekLG</small>

     <body oncontextmenu="return false;">



</center>
</footer> 
</body>
</head>
</html>