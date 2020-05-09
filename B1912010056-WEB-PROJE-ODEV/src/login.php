<?php 
 
// include("ayar.php");
ob_start();
session_start();



$kadi = $_POST["username"];
$sifre = $_POST["password"];

 
// $sql_check = mysql_query("select * from uyeler where username='".$kadi."' and password='".$sifre."' ") or die(mysql_error());
 if(!empty($kadi) and !empty($sifre)){
    if($kadi=="b191210056@ogr.sakarya.com.tr" and $sifre=="123")  {
        $_SESSION["login"] = "tre";
        $_SESSION["user"] = $kadi;
        $_SESSION["pass"] = $sifre;
        echo "Hoşgeldin     ";echo   explode('@',$kadi)[0];
        header("Refresh: 2; url=about.html");
    }
    else{
        $_SESSION["login"] = "false";
        echo "Kullancı Adı veya Şifre Yanlış.<br>";
          echo "Giriş sayfasına yönlendiriliyorsunuz.";
         header("Refresh: 2; url=login.html");
    }
 }else{
    echo "Kullancı Adı veya Şifre Boş geçilemez<br>";
    echo "Giriş sayfasına yönlendiriliyorsunuz.";
    header("Refresh: 2; url=login.html");
 }

 
ob_end_flush();
?>