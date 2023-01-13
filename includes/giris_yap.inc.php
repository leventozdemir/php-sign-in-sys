<?php

if(isset($_POST["submit_giris"])){

      $user_mail =$_POST["mail_adres"];
      $user_pass =$_POST["sifre"];

      include "../siniflar/dbconnect.siniflar.php";
      include "../siniflar/giris_yap.siniflar.php";

      $giris_yap_nesne = new giris_yap();

      list($kontroler, $name)= $giris_yap_nesne->kullanici_giris($user_pass, $user_mail,);
      if ($kontroler){
          print "hoşgeldin " . $name;
          }

      else{
          print "öyle bir kullanıcı yok";
        }



    }


 ?>
