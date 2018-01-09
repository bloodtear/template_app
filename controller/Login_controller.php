<?php
include_once(rtrim(APP_PATH, "/") . "/config.php");

class Login_controller {
  function pretreat(){

  }

  function posttreat(){
    
  }

  function login_action() {
    $tpl = new Tpl('index/header', 'index/footer');
    $tpl->view('login/login');
  }

  function register_action() {
    $tpl = new Tpl('index/header', 'index/footer');
    $tpl->view('login/register');
  }

  function login_ajax(){
    $username = get_request("username");
    $password = get_request("password");

    $user = User::get_one($username, $password);
    logging::d("ret", json_encode($user));
    if (!empty($user)) {
      $user->do_login();
    }
    return !empty($user) ? array("ret" => "success" , "data" => $user->packInfo()) : array("ret" => "fail" , "reason" => "no user.") ;
    
  }

  function register_ajax(){
    $username = get_request("username");
    $password = get_request("password");

    
  }












}





?>
