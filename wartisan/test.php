 <?php
ob_start();
echo "hello";
ob_end_flush();
header("Location:http://stackoverflow.com");
?> 