<?php


class dbconnecter {

  protected function connect() {

    try{

      $username = "root";
      $password = "";
      $dbhandler = new PDO('mysql:host=localhost; dbname=Users', $username, $password);
      return $dbhandler;

        }

    catch (PDOException $error) {
      print "Hata: " . $error->getMessage() . "<br/>";
      die();

          }


  }

}


 ?>
