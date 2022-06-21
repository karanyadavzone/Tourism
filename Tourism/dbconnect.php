<?php
$conn = new mysqli("localhost","root","","user_info");
if($conn->connect_error){
 die($conn->connect_error);
}
?>