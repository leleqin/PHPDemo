<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="menu/css/lrtk.css" type="text/css" rel="stylesheet">
<link href="css/quan.css" rel="stylesheet" type="text/css" />
<script src="menu/js/jquery-1.3.2.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$(".subNav").click(function(){
			$(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd")
			$(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt")
			
			$(this).next(".navContent").slideToggle(500).siblings(".navContent").slideUp(500);
	})	
})
</script>
<title>导航</title>
</head>
<body>

<div id="top">
<div id="quan"><div id="ssss">
  <div id="dao"><div class="container">
	<nav>
		<ul>
            <li><a href="index.php">乐库</a></li>
			<li><a href="songer.php">歌手</a></li>
			<li><a href="MV.php">MV</a></li>
            <li><a href="quite.php">退出登录</a></li>
		</ul>
	</nav>
    </div>
    <div class="subNavBox">
	<div class="subNav currentDd currentDt">后台曲库</div>
	<ul class="navContent " style="display:block">
			<li></li>
			<li><a href="manager1.php" class="bai"><span class="bai">曲库浏览</span></a></li>
			<li><a href="manager_add.php" class="bai"><span class="bai">添加歌曲</span></a></li>
	</ul>
	<div class="subNav">MV编辑</div>
	<ul class="navContent">
			<li><a href="manager1.php" class="bai"><span class="bai">MV单浏览</span></a></li>
			<li><a href="manager_addMV.php"class="bai"><span class="bai">添加MV</span></a></li>
	</ul>
	<div class="subNav">论坛</div>
	<ul class="navContent">
			<li><a href="#"class="bai"><span class="bai">论坛单</span></a></li>
			<li><a href="#"class="bai"><span class="bai">添加论坛</span></a></li>
			<li><a href="#"class="bai"><span class="bai">编辑论坛</span></a></li>
	</ul>
</div>
    <p>&nbsp;</p>
    	<?php
		require("Untitled-1.php")
		?>
</div>
</body>
</html>