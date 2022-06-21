<?php
session_start();
require_once('dbconnect.php');
$id = $_SESSION['user_id'];
if(!isset($id)){
 header("Location: login.php");
}
else{
 $res = $conn->query("SELECT * FROM users WHERE user_id='$id'");
 $userRow = $res->fetch_array();
}
?>
<html>
<head>
<title>Welcome <?php echo $userRow['username']; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top">
<img src="images/tourism.png">
</div>
<div class="side">
<a href="login.php" id="button">Home</a>
<a href="register.php" id="button"> Register</a>
<a href="#" id="user"><?php echo $userRow['username']; ?></a>
<a href="signout.php?signout" id="sign"> Sign Out</a>
</div>
<div id="userbody">
<h1 align="center">Top 3 places to explore in Rajasthan </h1>
<h2>1. Jaipur </h2><br>
<img src="images/jaipur.jpg" width="800" height="400"/>
<p id="font">Jaipur is the capital of India’s Rajasthan state. It evokes the royal family that once ruled the region and that, in 1727, founded what is now called the Old City, or “Pink City” for its trademark building color. At the center of its stately street grid (notable in India) stands the opulent, colonnaded City Palace complex. With gardens, courtyards and museums, part of it is still a royal residence. </p><br>
<h2>2. Udaipur </h2><br>
<img src="images/udaipur.jpg" width="800" height="400"/>
<p id="font">City Palace, Udaipur is a palace complex situated in the city of Udaipur in the Indian state of Rajasthan. It was built over a period of nearly 400 years, with contributions from several rulers of the Mewar dynasty. </p><br>
<h2>3. Bikaner </h2><br>
<img src="images/bikaner.jpg" width="800" height="400"/>
<p id="font">Bikaner is a city in the north Indian state of Rajasthan, east of the border with Pakistan. It's surrounded by the Thar Desert. The city is known for the 16th-century Junagarh Fort, a huge complex of ornate buildings and halls. Within the fort, the Prachina Museum displays traditional textiles and royal portraits. Nearby, the Karni Mata Temple is home to many rats considered sacred by Hindu devotees. </p><br>
</div>
<div id="footer">
<p>Copyright © 2021 Tourism</p>
</div>
</body>
</html>