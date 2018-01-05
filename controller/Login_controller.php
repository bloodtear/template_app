<?php

class Login_controller {
  function pretreat(){

  }

  function posttreat(){
    
  }

  function login_action() {
    $tpl = new Tpl('index/header', 'index/footer');
    $tpl->view('login/login');
  }

  function login_ajax(){
    $username = get_request("username");
    $password = get_request("password");

    Logging::l("LOGIN_UN", $username);
    Logging::l("LOGIN_PD", $password);
    return 123;
    return array("ret" => 'success', "data" => 234);
  }
}





?>
