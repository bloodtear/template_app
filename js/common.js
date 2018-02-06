$(document).ready(function (){

  $('#logout_btn').click(function (){
    __ajax("login.do_logout", {} ,function (data){
      if (data.ret == 'logout'){
        go("index/index");
      }
    });

  });
});
