<?php
ob_start();
session_start();
unset($_SESSION['gly']);
echo "<script language='javascript'>top.location.href='login.php'</script> ";
?>