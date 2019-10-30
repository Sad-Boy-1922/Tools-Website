<?php
    echo '<br><br><center><br><b>=====[ Port Scanner ]=====</b><br>';
    $start = strip_tags($_POST['start']);
    $end = strip_tags($_POST['end']);
    $host = strip_tags($_POST['host']);
    if(isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])){
    for($i = $start; $i<=$end; $i++){
    $fp = @fsockopen($host, $i, $errno, $errstr, 3);
    if($fp){
    echo 'Port '.$i.' is <font color=green>open</font><br>';
    }
    flush();
    }
    }else{
    echo '<table class=tabnet style="width:300px;padding:0 1px;">
   <input type="hidden" name="y" value="phptools">
   <tr><th colspan="5">Port Scanner</th></center></tr>
   <tr>
		<FONT SIZE=4>Host</FONT><center></td></td>
		<td><input type="text" class="inputz"  style="width:220px;color:#00ff00;" name="host" value="localhost"/></td>
   </tr>
   <tr>
		<FONT SIZE=4>Port Start</FONT><center></td>
		<td><input type="text" class="inputz" style="width:220px;color:aqua;" name="start" value="0"/></td>
   </tr>
	<FONT SIZE=4>Port Start</FONT><center></td></td>
		<td><input type="text" class="inputz"  style="width:220px;color:aqua;" name="end" value="5000"/></td>
   </tr><td><input class="inputzbut" type="submit" style="color:#00ff00" value="Scan Ports" />
   </td></form></center></table>';
    }
?>
<html>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="http://pereyaslav-rda.gov.ua//images/20190623_120810.jpg">
  <title>[ Port Scanner ]</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="Fungsi:Melakukan Scan website Dan Mencari Port">

<HTML><FONT COLOR="blue"><FONT SIZE=4>Fungsi:Melakukan Scan Port</FONT><center>
<HTML><FONT COLOR="black"><FONT SIZE=3>Cara Menggunakan:Masukan Url Target Lalu Klik Scan</FONT><center>
<HTML><FONT COLOR="aqua"><FONT SIZE=2>Copyright.2019.Sad-Boy_Web</FONT><center>





 
