<?php
ob_start();
session_start();
require_once("conn.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/table.css" rel="stylesheet" type="text/css" />
<title>添加</title>
<?php
if(isset($_POST['button']))
{
	$_name=$_POST['name'];
	$_actor=$_POST['actor'];
	$_qu=$_POST['qu'];
	
	$add_aql="insert into video(name,actor,qu) values('$_name','$_actor','$_qu')";
	
	//echo $add_aql;
	mysql_query($add_aql);
	header("location:manager1.php");
}
?>
</head>

<body>
<form id="form5" name="form5" method="post" action="">
 <table width="1000" border="1" align="center">
  <tbody>
    <tr>
      <th width="196" height="50" style="text-align: center" scope="col">歌曲名</th>
      <th width="235" style="text-align: center" scope="col">歌手</th>
      <th width="289" style="text-align: center" scope="col">歌曲路径</th>
      </tr>
    <tr>
      <td height="59"><input type="text" name="name" id="name" style="height:40px; width: 200px; color: #494A5F;"></td>
      
      <td><input type="text" name="actor" id="textfield2"
      style="height:40px; width: 200px; color: #494A5F;"></td>
      <td><input type="text" name="qu" id="qu" style="height:40px; width: 200px; color: #494A5F;"></td>
      </tr>
    <tr>
      <td height="59" colspan="3" align="center" valign="middle"><input type="submit" name="button" id="button" value="添加" style="height:30px; width: 60px;"></td>
      </tr>
  </tbody>
</table>
</form>
</body>
</html>