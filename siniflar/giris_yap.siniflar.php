<?php

class giris_yap extends dbconnecter{

  public function kullanici_giris($user_pass, $user_mail) {

        $kullanici_giris = $this->connect()->prepare('select password, name_surname from Users where mail_address = ?;');


        if(!$kullanici_giris->execute(array($user_mail))) {
          exit();
        }

        $hashed_pass = $kullanici_giris->fetchAll(PDO::FETCH_ASSOC);
        $pass_kontrolu = password_verify($user_pass, $hashed_pass[0]["password"]);

        if ($pass_kontrolu){
          return array(true, $hashed_pass[0]["name_surname"]);
        }

        else{
          return array(false, "plapl");
        }

    }

}




 ?>
