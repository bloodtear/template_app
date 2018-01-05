function __ajax(action, data, callback) {

  $.ajax({
    type: "GET",
    url: 'ajax.php?action=' + action,
    data: data,
    dataType: "json",
    success: function(data){
      console.log(data);
      callback(data);
    }
  });


}

function logout() {
  console.log('main.js');
}
