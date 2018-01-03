<?php

class Index_controller {
  function pretreat(){
    echo "pretreat";
  }

  function posttreat(){
    echo "posttreat";
  }

  function index_action() {
      $tpl = new Tpl('index/header', 'index/footer');
      $tpl->set("id", 123);
      $tpl->view('index/index');
  }


}





?>
