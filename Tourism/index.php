<html>
<head>
<title>Travel Adviser</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top">
<img src="tourism.png">
</div>
<div class="side">
<a href="login.php" id="button">Home</a>
<a href="register.php" id="button"> Register</a>
</div>
<div class="body">
<h2 id="font">Login</h2><br>
<p id="font">Proceed further by entering you're username and password.</p><br>
<input type="text" id="username" placeholder="Username" onKeyUp="checkname();"><br>
<input type="password" id="password" placeholder="Password"><br>
<input type="submit" value="Log In" onClick="return logger();" name="login" id="login"><br>
<p id="font">Not a member?</p> <a href="register.php" id="button1">Register</a><br>
							<span id="logger_empty"></span>
							<span id="logger_error"></span>
</div>
<div id="footer">
<p>Copyright © 2021 Tourism</p>
</div>
<script type="text/javascript">
function logger(){
 var username = $('#username').val();
 var password = $('#password').val();
 if(username == '' || password == ''){
  $('#logger_empty').html("All fields are required");
 }
 else{
  $('#logger_empty').html('');
  $.ajax({
   url: "login_connect.php",
   type: "POST",
   async: false,
    data: {
     logger_name : username,
     logger_pass : password
    },
    success: function(response){
     if(response == "Success"){
      $(location).attr('href','user.php');
     }
     else{
      $('#logger_error').html(response);
     }
    }
  })
 }
 return false;
}
</script>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>
