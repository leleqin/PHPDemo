<?php
ob_start();
require_once("conn.php")
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查询结果</title>
<link href="css/table.css" rel="stylesheet" type="text/css"/>
<link href="css/quan.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="quan"><div id="ssss">
  <div id="dao"><div class="container">
	<nav>
		<ul>
            <li><a href="index.php">乐库</a></li>
			<li><a href="songer.php">歌手</a></li>
			<li><a href="MV.php">MV</a></li>
            <li><a href="quite.php">退出登录</a></li>
			<li><a href="manager.php">管理员登录</a></li>
           
		</ul>
	</nav>
    </div>
<p>&nbsp;</p>
<?php
	$wd=$_GET['words'];
	$sqlstr1="select * from video where name like '%$wd%' or actor like '%$wd%' ";
	$rs1=mysql_query($sqlstr1);
$recordcont=mysql_num_rows($rs1);
 if($recordcont<1)
 {
	 header("Location:index.php");
	 return false;
	 }
$pagesize=20;
$pagecount=ceil($recordcont/$pagesize);

//echo $pageno;

$pageno=isset($_GET['pageno'])?$_GET['pageno']:1;
if($pageno<1)
$pageno=1;
if($pageno>$pagecount)
$pageno=$pagecount;
$starno=($pageno-1)*$pagesize;
$sqlstr="select*from video where name like '%$wd%'  or actor like '%$wd%' limit $starno,$pagesize";



   $rs=mysql_query($sqlstr);

   ?>


<table width="1000" border="0" align="center" cellspacing="0">
  <tr>
    <th width="121" height="56" scope="col">ID</th>
    <th width="325" scope="col">歌曲名</th>
    <th width="289" scope="col">歌手</th>
    <th width="257" scope="col">试听</th>
  </tr>
  <?php
      while($row=mysql_fetch_assoc($rs)){
	  ?>
  <tr>
    <td height="20" colspan="5"><hr></td>
  </tr>
  <tr>
    <td height="59"><?php echo $row['ID']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['actor']?></td>
    <td><audio controls> <source src="<?php echo $row['qu']?>"></source></audio></td>
  </tr>
  <?php
  }
  ?> 
</table>
<hr>
<table width="1000" align="center">
  <tr>
    <td><p><a href="?pageno=1&words=<?php echo $wd ?>">首页</a>
    <a href="?pageno=<?php echo $pageno-1 ?>&words=<?php echo $wd ?>">上一页</a> 
    <a href="?pageno=<?php echo $pageno+1 ?>&words=<?php echo $wd ?>">下一页</a> 
    <a href="?pageno=<?php echo $pagecount ?>&words=<?php echo $wd ?>">尾页  </a> | 当前<?php echo $recordcont ?>条记录 当前第<?php echo $pageno ?>页 &nbsp;&nbsp;&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
<br>
<br>
<div>
	<?php
	require("botton.php")
	?>
</div>
</body>
</html>