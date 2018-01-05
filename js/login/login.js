$(document).ready(function (){


$('#sub_btn').click(function (){

  var username = $('#username').val();
  var password = $('#password').val();

  console.log(username);
  console.log(password);

  //__ajax('login.login',{username: username, password: password},function (data){
  __ajax('photograph.enjoy.company.user.addasdf',{username: username, password: password},function (data){

  });

});







});
