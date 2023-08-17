$(document).ready(function () {
  getname();
  loadUserData();
});

function getname() {
  $("#userForm").submit(function (event) {
    var name = $("#name").val();

    $.ajax({
      type: "POST",
      url: "insert.php",
      data: { name: name },
      success: function (response) {
        alert("insert เรียบร้อย");
      },
    });
  });
}

function loadUserData() {
  $.ajax({
    type: "GET",
    url: "getdata.php", 
    success: function (data) {
      $("#userTable tbody").html(data);
    },
  });
}