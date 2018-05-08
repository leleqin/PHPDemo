<?php
session_start();
require_once("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理员登录</title>
<link href="css/manager.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php 
if(isset($_POST['denglu'])){
	$user=$_POST['login'];
	$psw=$_POST['mima'];
	$sql="select * from manager where uname='$user' and upsw='$psw'";
	$rs=mysql_query($sql);
	$usernum=mysql_num_rows($rs);
	echo $usernum;
	if($usernum>=1)
	{
		$_SESSION['gly']=$user;
		header("location:manager1.php");
	}
	else{
	header("location:login.php");	
	return false;
	}
}
?>
<p><form action="" method="post"><table width="388" height="231" border="0" align="center" cellspacing="0" id="top">
  <tbody>
    <tr>
      <th height="52" colspan="2" scope="col">管理员登录
        <hr></th>
      </tr>
    <tr>
      <td width="97" height="48">管理员名：</td>
      <td width="281"><input type="text" name="login" id="login" class="inputstyle" placeholder="请输入管理员姓名"></td>
    </tr>
    <tr>
      <td height="61">密码：</td>
      <td><input name="mima" type="password" id="mima" autocomplete="on" placeholder="请输入密码"></td>
    </tr>
    <tr>
      <td height="49" colspan="2"><input name="denglu" type="submit" class="button_blue" id="denglu" style="width:150px;" value="登 录"/>&nbsp;</td>
      </tr>
  </tbody>
</table>
</form></p>

</body>
</html>