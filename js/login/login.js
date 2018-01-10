$(document).ready(function (){


$('#sub_btn').click(function (){

  var username = $('#username').val();
  var password = $('#password').val();

  console.log(username);
  console.log(password);

  __ajax('login.login',{username: username, password: password},function (data){
    var ret = data.ret;
    if (ret == 'login') {
      go("index/index");
    }else if (ret == 'fail') {
      alert(data.reason);
    }
  });

});

$('#go_register').click(function(){
    go("login/register");


});







});
