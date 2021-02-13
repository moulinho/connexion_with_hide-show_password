$(document).ready(function () {
  $("#eyes").click(function () {
    Check_pass();
  });

  $("#login").click(function () {
    Check_login();
  });

  function Check_pass() {
    let password = $("#password");
    let typepasword = password.attr("type");

    if (typepasword == "password") {
      password.attr("type", "text");
      $("#eyes").html("<span class='glyphicon glyphicon-eye-close'></sapn>");
    } else {
      password.attr("type", "password");
      $("#eyes").html("<span class='glyphicon glyphicon-eye-open'></sapn>");
    }
  }

  function Check_login() {
    var username = $("#username").val();
        var password = $("#password").val();
      

    if ($.trim(username).length > 0 && $.trim(password).length > 0) {
      $.ajax({
        type: "POST",
        url: "login.php",
        data: {
          username: username,
          password: password,
        },
        cache: false,
        beforeSend: function () {
          $("#login").val("Traitement...");
        },
        success: function (data) {
          if (data) {
            $("body").load("home.php").hide().fadeIn(1500);
          } else {
            $("#login").val("login");
            $("#error").html(
              "<span class='text-danger'>Sorry data invalid!</span>"
            );
          }
        },
      });
    } else {
      return false;
    }
  }
});
