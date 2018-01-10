function __ajax(action, data, callback) {

  $.ajax({
    type: "post",
    url: 'ajax.php?action=' + action,
    data: data,
    dataType: "json",
    success: function(data){
      console.log(data);
      callback(data);
    },
    error: function (object, info) {
      console.log('errorinfo:' + info);
      console.log(object.responseText);
    }
  });


}

function go(url) {
  console.log(url);
  window.location.href = "?" + url; 
}
