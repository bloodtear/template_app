<?php

class Index_controller {

  function index_action() {
      echo "index_conroller/index_action";
      return array(
        "op" => "act",
        "data" => '123'
      );
  }


}





?>
