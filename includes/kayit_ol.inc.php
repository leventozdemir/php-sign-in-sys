<?php

if(isset($_POST["submit_kayit"])){
      $user_name =$_POST["kullanici_adi"];
      $user_mail =$_POST["mail_adres"];
      $user_pass =$_POST["sifre"];

      include "../siniflar/dbconnect.siniflar.php";
      include "../siniflar/kayitol.siniflar.php";


      $kayit_ol_nesne = new kayit_ol();

      $kontroler= $kayit_ol_nesne->kullanici_kontrolu($user_mail);

      if ($kontroler){
          $kayit= $kayit_ol_nesne->kullanici_ekle($user_name, $user_pass, $user_mail);
          header("location:../index.php?error=none");
          }
          
      else{
          print "Bu mail adresi zaten kayıtlı";
        }



    }


 ?>
