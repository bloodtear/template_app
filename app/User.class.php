<?php

class User {
  private $data = array();

  public static $instance;
  
  public static function instance (){
    if (empty(self::$instance)) {
      self::$instance = new User();
    }
    return self::$instance;
  }

  public static function get_one($username, $password) {
    $data = Db_user::instance()->one($username, $password);
    if (empty($data)) {
      return false;
    }
    return new User($data);
  }

  public function __construct($data) {
    $this->data = $data;

  }

  public function do_login() {
    $_SESSION['username'] = $this->username();
  }

  public function id() {
    $data = $this->data;
    return $data['id'];
  }

  public function username() {
    $data = $this->data;
    logging::l("USER", $data);
    return $data['username'];
  }

  public function password() {
    $data = $this->data;
    return $data['password'];
  }

  public function token() {
    $data = $this->data;
    return $data['token'];
  }

  public function status() {
    $data = $this->data;
    return $data['status'];
  }

  public function create_time() {
    $data = $this->data;
    return $data['create_time'];
  }

  public function modify_time() {
    $data = $this->data;
    return $data['modify_time'];
  }

  public function last_login() {
    $data = $this->data;
    return $data['last_login'];
  }

  public function packInfo() {
    return array(
      "id" => $this->id(),
      "username" => $this->username(),
      "token" => $this->token(),
      "status" => $this->status(),
      "create_time" => $this->create_time(),
      "modify_time" => $this->modify_time(),
      "last_login" => $this->last_login()
    );
  }




}












?>
