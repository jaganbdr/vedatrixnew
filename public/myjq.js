$(document).ready(function () {
  alert("document loaded");

  $("#request").submit(function (e) {
    dataString = $("#request").serialize();
    url=$("#request").attr("url");
    $.ajax({
      type: "POST",
      url: url,
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
