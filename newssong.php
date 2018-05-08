<?php
ob_start();
require_once("conn.php");
session_start();
if($_SESSION['gly']!='')
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="css/table.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?php

$re1=mysql_query("select*from video");
$recordcont=mysql_num_rows($re1);
$pagesize=5;
$pagecount=ceil($recordcont/$pagesize);
//echo $pageno;
$pageno=isset($_GET['pageno'])?$_GET['pageno']:1;
if($pageno<1)
$pageno=1;
if($pageno>$pagecount)
$pageno=$pagecount;
$starno=($pageno-1)*$pagesize;
$sqlstr="select*from video limit $starno,$pagesize";



 
   $rs=mysql_query($sqlstr);

   ?>
<table width="670" border="0" align="center">
  <tr>
    <th width="64" height="34" scope="col">ID</th>
    <th width="328" scope="col">歌曲名</th>
    <th width="214" scope="col">演唱</th>
    <th width="50" scope="col">试听</th>
  </tr>
  <?php
      while($row=mysql_fetch_assoc($rs)){
	  ?>
  <tr>
    <td height="6" colspan="5"><hr></td>
  <tr>
    <td height="52"><?php echo $row['ID']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['actor']?></td>
	  <td><audio controls> <source src="<?php echo $row['qu']?>"></source></audio></td>
  <?php
  }
  ?> 
</table>
<hr width="650px;">
<table width="613" align="center">
  <tr>
    <td width="605"><p><a href="index.php">首页</a>
    <a href="?pageno=<?php echo $pageno-1 ?>">上一页</a> 
    <a href="?pageno=<?php echo $pageno+1 ?>">下一页</a> 
    <a href="?pageno=<?php echo $pagecount ?>">尾页  </a> | 当前<?php echo $recordcont ?>条记录 当前第<?php echo $pageno ?>页 &nbsp;&nbsp;&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
}
else header("location:login.php");
?>