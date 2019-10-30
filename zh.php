<!-- Zone-H -->
<meta charset="utf-8">
  <link rel="icon" type="image/png" href="http://pereyaslav-rda.gov.ua//images/20190623_120810.jpg">
  <title>Zone H Mass Notify</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="Mirror Massal Ke Zone H">   
	<center><br><Br><br>
<FONT SIZE=4>Zone H Mass Notify</FONT><center>
<FONT SIZE=3>Fungsi:Miror Ke Zone H Secara Massal</FONT><center>
<form action="" method='POST'><table><table class='tabnet'><tr>
<td style='background-color:yellow;padding-left:10px;'><tr><tr><th colspan="2"><h2>Auto Notify</h2></th></tr></td></tr><tr><td height='45' colspan='2'><form method="post">
<input type="text" class="inputz" name="defacer" value="Nama Defacer" />
<select name="hackmode" class="inputz" >
<option >------------------------Pilih Salah Satu------------------------</option>
<option value="1">known vulnerability (i.e. unpatched system)</option>
<option value="2" >undisclosed (new) vulnerability</option>
<option value="3" >configuration / admin. mistake</option>
<option value="4" >brute force attack</option>
<option value="5" >social engineering</option>
<option value="6" >Web Server intrusion</option>
<option value="7" >Web Server external module intrusion</option>
<option value="8" >Mail Server intrusion</option>
<option value="9" >FTP Server intrusion</option>
<option value="10" >SSH Server intrusion</option>
<option value="11" >Telnet Server intrusion</option>
<option value="12" >RPC Server intrusion</option>
<option value="13" >Shares misconfiguration</option>
<option value="14" >Other Server intrusion</option>
<option value="15" >SQL Injection</option>
<option value="16" >URL Poisoning</option>
<option value="17" >File Inclusion</option>
<option value="18" >Other Web Application bug</option>
<option value="19" >Remote administrative panel access bruteforcing</option>
<option value="20" >Remote administrative panel access password guessing</option>
<option value="21" >Remote administrative panel access social engineering</option>
<option value="22" >Attack against administrator(password stealing/sniffing)</option>
<option value="23" >Access credentials through Man In the Middle attack</option>
<option value="24" >Remote service password guessing</option>
<option value="25" >Remote service password bruteforce</option>
<option value="26" >Rerouting after attacking the Firewall</option>
<option value="27" >Rerouting after attacking the Router</option>
<option value="28" >DNS attack through social engineering</option>
<option value="29" >DNS attack through cache poisoning</option>
<option value="30" >Not available</option>
</select>

<select name="reason" class="inputz" >
<option >-------------Pilih Salah Satu---------------</option>
<option value="1" >Heh...just for fun!</option>
<option value="2" >Revenge against that website</option>
<option value="3" >Political reasons</option>
<option value="4" >As a challenge</option>
<option value="5" >I just want to be the best defacer</option>
<option value="6" >Patriotism</option>
<option value="7" >Not available</option>
</select>
<input type="hidden" name="action" value="zone">
<center><textarea style="background:lime;outline:none;" name="domain" cols="116" rows="9" id="domains">List Of Domains</textarea>
<br /><input class='inputzbut' type="submit" value="Send Now !" name="SendNowToZoneH" /><br></center></table>
</form></td></tr></table></form>
<!-- End Of Zone-H -->
</td></center><br><br>
<?php
echo '<center>';
	ob_start();
	$sub = get_loaded_extensions();
	if(!in_array("curl", $sub)){die('[-] Curl Is Not Supported !! ');}
	$hacker = $_POST['defacer'];
	$method = $_POST['hackmode'];
	$neden = $_POST['reason'];
	$site = $_POST['domain'];
	
	if (empty($hacker)){die ("[-] You Must Fill the Attacker name !");}
	elseif($method == "--------SELECT--------") {die("[-] You Must Select The Method !");}
	elseif($neden == "--------SELECT--------") {die("[-] You Must Select The Reason");}
	elseif(empty($site)) {die("[-] You Must Inter the Sites List ! ");}
	$i = 0;
	$sites = explode("\n", $site);
	while($i < count($sites)) 
	{
		if(substr($sites[$i], 0, 4) != "http") {$sites[$i] = "http://".$sites[$i];}
		ZoneH("http://zone-h.org/notify/single", $hacker, $method, $neden, $sites[$i]);
		echo "Site : ".$sites[$i]." Defaced !\n";
		++$i;
	}
	echo "[+] Sending Sites To Zone-H Has Been Completed Successfully !! ";

	echo '</center>';

