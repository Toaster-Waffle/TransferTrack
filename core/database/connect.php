<?php
$connect_error = 'Experience Connection Issues';
$conn = mysqli_connect('localhost','root','','phplogin') or die($connect_error);
mysqli_select_db($conn,'phplogin') or die($connect_error);

?>