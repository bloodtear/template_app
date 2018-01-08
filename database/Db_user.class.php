<?php

class Db_user extends Database_table {

  public static $instance;

  public static function instance (){
    if (empty(self::$instance)) {
      self::$instance = new Db_user(DB_USER);
    }
    return self::$instance;
  }



  public function one($username){
    return $this->get_one("username = '$username'");

  }


  











}











?>
