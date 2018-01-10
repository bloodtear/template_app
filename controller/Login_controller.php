<?php
include_once(rtrim(APP_PATH, "/") . "/config.php");

class Login_controller {
  function pretreat(){

  }

  function posttreat(){
    
  }

  function login_action() {
    $tpl = Tpl::instance('index/header', 'index/footer');
    $tpl->view('login/login');
  }

  function register_action() {
    $tpl = Tpl::instance('index/header', 'index/footer');
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
    return !empty($user) ? ret_success("login", $user->packInfo()) : ret_fail("no user.") ;
    
  }

  function register_ajax(){
    $username = get_request("username");
    $password = get_request("password");

    $user = User::check_one($username);
    if (!empty($user)) {
      return ret_fail("用户已经存在");
    }
    $ret = User::create($username, $password);
    
    return !empty($ret) ? ret_success("register", $ret) : ret_fail("register failed.") ;
  }

  function logout_ajax(){
    $username = get_request("username");
    unset($_SESSION['username']);
    return ret_success('logout');
  }












}





?>
