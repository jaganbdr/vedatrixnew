$(document).ready(function () {
  alert("document loaded");

  $("#request").submit(function (e) {
    dataString = $("#request").serialize();

    $.ajax({
      type: "POST",
      url: "/contact",
      data: dataString,
      success: function (data) {
        alert(data);

        $("#fname").val("");
        $("#fnumber").val("");
        $("#femail").val("");
        $("#fmsg").val("");

        //location.reload(true);
      },
    });
    return false;
  });
});
