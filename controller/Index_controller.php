<?php
include_once(rtrim(APP_PATH, "/") . "/config.php");

class Index_controller {
  function pretreat(){
    User::login_check();
    //echo "pretreat";
  }

  function posttreat(){
    //echo "posttreat";
  }

  function index() {

      $tpl = Tpl::instance('index/header', 'index/footer');

      $cache = Cache::instance();
      $chat_list_history = $cache->list_all("chat_list");
      
      

      $ar = array(
        "a" => 2,
        "b" => array(
          "c" => "d",
          "e" => array(
            "jh" => 123,
            "gj" => 223
          )
        )
      );
      $xy = new stdClass();
      $xy->name = 'xiaoyu';
      $xy->year = 30;
      $tpl->set("id", 123);
      $tpl->set("name", "xiaoyu");
      $tpl->set("chat_list_history", $chat_list_history);
      $tpl->set("xy", $xy);
      $tpl->set("ar", $ar);
      $tpl->view('index/index');
  }


}





?>
