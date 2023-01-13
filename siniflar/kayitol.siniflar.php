<?php

class kayit_ol extends dbconnecter{

  public function kullanici_kontrolu($user_mail) {
      $var_olan_kullanici = $this->connect()->prepare('select user_id from Users where mail_address = ? ;');

      if(!$var_olan_kullanici->execute(array($user_mail))) {
        $var_olan_kullanici = null;
        exit();
      }

      $kontroler;
      if($var_olan_kullanici->rowCount() > 0 ) {
        $kontroler = false;

      }

      else{
        $kontroler = true;
      }

      return $kontroler;

  }


  public function kullanici_ekle($user_name, $user_pass, $user_mail) {
    $sifre_hash = password_hash($user_pass, PASSWORD_DEFAULT);
    $kullanici_ekleme = $this->connect()->prepare('insert into Users(name_surname, mail_address, password) values (? ,?, ?); ');

    if(!$kullanici_ekleme->execute(array($user_name, $user_mail, $sifre_hash))) {

      $kullanici_ekleme = null;
      exit();
    }
    $kullanici_ekleme = null;
}


}

 ?>
