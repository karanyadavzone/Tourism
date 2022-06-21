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
<h2 id="font">Register</h2><br>
<p id="font">Register with us to explore website contents.</p><br>
<input type="text" name="username" id="username" placeholder="Username" onKeyUp="checkname();"/><br>
<input type="text" id="name" placeholder="Full Name" /><br>
<input type="text" id="email" placeholder="Email" onKeyUp="checkmail();"/><br>
<input type="password" id="password" placeholder="Password" onKeyUp="checkpass();"/><br>
<input type="password" name="match_password" id="match_password" placeholder="Retype password" onKeyUp="matchpass();" /><br>
<input type="submit" name="submit" id="submit" value="Register" onClick="return results();" /><br>
							<span id="success"></span>
							<span id="error"></span>
</div>
<div id="footer">
<p>Copyright © 2021 Tourism</p>
</div>
<script type="text/javascript">
function checkname(){
 var name = $('#username').val();
 if(name){
  $.ajax({
   url : "check.php",
   type : "POST",
   async : false,
   data: {
    check_name : name
   },
   success: function(response){
    $('#name_checked').html(response);
   }
  })
 }
}
function checkmail(){
 var email = $('#email').val();
 if(email){
  $.ajax({
   url : "check.php",
   type : "POST",
   async : false,
   data: {
    check_email : email
   },
   success: function(response){
    $('#email_checked').html(response);
   }
  })
 }
}
function checkpass(){
 var pass = $('#password').val();
 if(pass){
  $.ajax({
   url : "check.php",
   type : "POST",
   async : false,
   data: {
    check_pass : pass
   },
   success: function(response){
    $('#password_checked').html(response);
   }
  })
 }
}
function matchpass(){
 var password = $('#password').val();
 var retype = $('#match_password').val();
 if(retype){
  $.ajax({
   url : "check.php",
   type : "POST",
   async : false,
   data: {
    match_password : password,
    retype_password : retype
   },
   success: function(response){
    $('#match').html(response);
   }
  })
 }
}
function results(){
 var username = $('#username').val();
 var name = $('#name').val();
 var email = $('#email').val();
 var mobile = $('#mobile').val();
 var year = $('#year').val();
 var password = $('#password').val();
 if(username == '' || email == '' || password == ''){
  $('#error').html("All fields required");
 }
 else{
  $('#error').html('');
  $.ajax({
   url : "check_register.php",
   type : "POST",
   async : false,
    data: {
     reg_name : username,
     reg_email : email,
	 reg_fullname : name,
     reg_pass : password
    },
    success: function(data){
     var username = $('#username').val('');
     var email = $('#email').val('');
     var password = $('#password').val(''); 
	 var name = $('#name').val('');
     $('#success').html(data);
    }
  })
 }
 return false;
}
</script>
<script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>
