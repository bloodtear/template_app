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


}





?>
