<html>
<title>Hash Generator</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="Mengenkripsi Password Dalam Bentuk Hash Kode">   
<?php
    {
$submit= $_POST['enter'];
if (isset($submit)) {
$pass = $_POST['password']; // password
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
$hash = md5($pass); // md5 hash #1
$md4 = hash("md4",$pass);
$hash_md5 = md5($salt.$pass); // md5 hash with salt #2
$hash_md5_double = md5(sha1($salt.$pass)); // md5 hash with salt & sha1 #3
$hash1 = sha1($pass); // sha1 hash #4
$sha256 = hash("sha256",$text);
$hash1_sha1 = sha1($salt.$pass); // sha1 hash with salt #5
$hash1_sha1_double = sha1(md5($salt.$pass)); // sha1 hash with salt & md5 #6
}
echo '<form action="" method="post"><b><table class=tabnet>';
echo '<tr><th colspan="2">Hash Generator</th></center></tr>';
echo '<tr><th colspan="2">Fungsi:Mengenkripsi Password Dalam Bentuk Hash Kode</th></center></tr>';
echo '<tr><td><b>masukan kata yang ingin di encrypt:</b></td>';
echo '<td><input class="inputz" type="text" name="password" size="40" />';
echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';
echo '</td></tr><br>';
echo '<tr><th colspan="2">Hasil Hash</th></center></tr>';
echo '<tr><td>Original Password</td><td><input class=inputz type=text size=50 value='.$pass.'></td></tr><br><br>';
echo '<tr><td>MD5</td><td><input class=inputz type=text size=50 value='.$hash.'></td></tr><br><br>';
echo '<tr><td>MD4</td><td><input class=inputz type=text size=50 value='.$md4.'></td></tr><br><br>';
echo '<tr><td>MD5 with Salt</td><td><input class=inputz type=text size=50 value='.$hash_md5.'></td></tr><br><br>';
echo '<tr><td>MD5 with Salt & Sha1</td><td><input class=inputz type=text size=50 value='.$hash_md5_double.'></td></tr><br><br>';
echo '<tr><td>Sha1</td><td><input class=inputz type=text size=50 value='.$hash1.'></td></tr><br><br>';
echo '<tr><td>Sha256</td><td><input class=inputz type=text size=50 value='.$sha256.'></td></tr><br><br>';
echo '<tr><td>Sha1 with Salt</td><td><input class=inputz type=text size=50 value='.$hash1_sha1.'></td></tr><br><br>';
echo '<tr><td>Sha1 with Salt & MD5</td><td><input class=inputz type=text size=50 value='.$hash1_sha1_double.'></td></tr><br><br></table>'; 
echo '<tr><th colspan="2">copyright_2019_Sad-Boy_Web</th></center></tr>';
}
?>

