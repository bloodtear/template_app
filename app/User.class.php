<?php

class User {

  public static $instance;
  
  public static function instance (){
    if (empty(self::$instance)) {
      self::$instance = new User();
    }
    return self::$instance;
  }

  public static function get_one($username) {
    return Db_user::instance()->one($username);
  }











}












?>
