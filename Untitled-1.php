<?php
session_start();
require_once("conn.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/table.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

$re1=mysql_query("select*from video");
$recordcont=mysql_num_rows($re1);
$pagesize=10;
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
   <table width="1000" border="1" align="center">
  <tr>
    <th width="69" height="48" bgcolor="#494A5F" style="text-align: center; font-family: '幼圆'; font-size: x-large;" scope="col">ID</th>
    <th width="209" bgcolor="#494A5F" style="text-align: center" scope="col">歌曲名</th>
    <th width="109" bgcolor="#494A5F" style="text-align: center" scope="col">演唱</th>
    <th width="163" bgcolor="#494A5F" style="text-align: center" scope="col">试听</th>
    <th colspan="2" bgcolor="#494A5F" style="text-align: center" scope="col">操作</th>
    </tr>
  <?php
      while($row=mysql_fetch_assoc($rs)){
	  ?>
  <tr>
    <td height="43"><?php echo $row['ID']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['actor']?></td>
    <td><audio controls> <source src="<?php echo $row['qu']?>"></source></audio></td>
    <td width="139" style="text-align: center"><a href="del.php?id=<?php echo $row['ID']?>"  onclick="return confirm('确认要删除吗？');">删除</a></td>
  </tr>
  <?php
  }
  ?> 
</table>
<table width="1000" align="center">
  <tr>
    <td height="40"><p><a href="?pageno=1">首页</a>
    <a href="?pageno=<?php echo $pageno-1 ?>">上一页</a> 
    <a href="?pageno=<?php echo $pageno+1 ?>">下一页</a> 
    <a href="?pageno=<?php echo $pagecount ?>">尾页  </a> | 当前<?php echo $recordcont ?>条记录 当前第<?php echo $pageno ?>页 &nbsp;&nbsp;&nbsp;</p></td>
  </tr>
</table>
</body>
</html>