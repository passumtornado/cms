<?php
DEFINE('MY_HOST','localhost');
DEFINE('MY_NAME','canteen');
DEFINE('MY_PASSWORD','');
DEFINE('MY_USER','root');

$db = @mysqli_connect(MY_HOST,MY_USER,MY_PASSWORD,MY_NAME)or die('could not connect:'.mysqli_connect_errno());

?>