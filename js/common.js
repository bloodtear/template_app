$(document).ready(function (){

  $('#logout_btn').click(function (){
    __ajax("login.logout", {} ,function (data){
      if (data.ret == 'logout'){
        go("index/index");
      }
    });

  });
});
