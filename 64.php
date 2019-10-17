<?php 
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['ende'];
?>
<html>
  <title>Tools Auto Encoded/Decoded</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="http://pereyaslav-rda.gov.ua//images/20190623_120810.jpg">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="Meng Enkrip dan Dekrip Script">

<body >
<STYLE>
body,td,th {background:white;];background:black;background-size:100%;
background-repeat: no-repeat;font-family: Verdana;font-size: 12px;color: cyan;font-weight: ;
background-attachment:fixed;}
</STYLE>
<center>
<center><br><b><font face='iceland' size='4'>Tools Encode / Decode Base64 and Md5 Hash</font></b><br><br>
<center><br><b><font face='iceland' size='2'>Fungsi:Mengenkrip Dan Dekrip Base 64 Dan Juga Hash Md5</font></b><br><br>
<form method="post"><br>
<textarea class='inputz' cols=130px rows=18 name="ende" style="background:transparent;color:aqua;"></textarea><br><br>
<select class='inputz' size="1" name="ope" style="background:black;color:aqua;">
<option value="base64" style='background:grey;color:aqua;'>Base64</option>
<option value="md5" style='background:transparent;color:aqua;'>MD5 Hash</option>
</select>&nbsp&nbsp<input class='inputzbut' type='submit' name='submit' value='Encode' style="background:transparent;color:aqua;">
<input class='inputzbut' type='submit' name='crack' value='Decode' style="background:transparent;color:aqua;">
</select>&nbsp;
</form>
<?php 
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'md5' : $codi=md5($text);
break;default:break;}}
$submit = $_POST['crack'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo "<from><center><h3></center><textarea cols=130 rows=20 style='onfocus();font-weight:bold;color:cyan;background: grey;background-size:100%;background-repeat: no-repeat;' class='inputz' readonly>".$html."</textarea><BR/><BR/></center></from>";
?>
</html>
<center><br><b><font face='iceland' size='3'>Copyright_2019_Sad-Boy_Web</font></b><br><br>




