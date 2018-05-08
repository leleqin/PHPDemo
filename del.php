<?php
require_once("conn.php");
$del_id=$_GET["id"];
$exec="delete from video where id=$del_id";
mysql_query($exec);

header("location:manager1.php");
 ?>
 
