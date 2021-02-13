<?php session_start();
if (isset($_SESSION["username"])) 
{
     header("location:home.php");
};

require "header/header.php";

?>

<div id="move">
      <form action="" method="post" id="myform">
            <div class="panel panel-default">
                  <div class="panel-body">
                        <div class="form-group">
                              <label for="username">Login </label>
                              <input id="username" name="username" class="form-control" type="text">
                        </div>
                        <div class="form-group ">
                              <label for="password">Password </label>
                              <div id="passContent">
                                    <input type="password" id="password" name="password" class="form-control"><button
                                          type="button" class="btn btn-primary" id="eyes"> <span
                                                class="glyphicon glyphicon-eye-open"></span></button>
                              </div>
                        </div>

                        <div class="form-group">
                              <input type="button" id="login" name="login" class="btn btn-primary" value="Login" />
                        </div>

                        <div id="error"></div>

                  </div>
            </div>
      </form>
</div>

<?php require "footer/footer.php" ; ?>