<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
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
            <li><a href="login.php">退出登录</a></li>
			<li><a href="manager.php">管理员登录</a></li>
           
		</ul>
	</nav>
    </div>
<script  language="javascript">
  function chk()
  {
	  var wd=document.getElementById("words").value;
	  if(wd=='')
	  {
		  alert("查询条件不能为空！");
		  return false;
		  
		  }
	  }
</script>
<p>&nbsp;</p>
<div id="sousuo"><form method="get" action="result.php"><input name="words" type="text" id="words"  placeholder="请输入歌曲名或歌手名" autocomplete="on" size="150" style="height:40px;"/>&nbsp;
<input type="submit" name="chaxun" id="chaxun" width="20px;" height="35px;"  onClick="return chk()" value="搜索" style="height:30px; width: 60px;"/></form></div>
<p>&nbsp;</p>
<br>
<br>
<br>
<div id="zhong">
      <div id="ge">
      <div id="dage">
        <div class="toum"><img src="../images/timg (7).jpg" width="280" height="250" /></div>
        <div class="touming">七里香——周杰伦</div>
       </div>
      </div>
      <div id="konghou">
        <div id="gedannn">
          <div id="geh">
            <div class="ged"><span class="toum"><img src="../images/timg (3).jpg" width="150" height="150" /></span></div>
            <span class="ged"><img src="../images/timg (5).jpg" width="200" height="150" /></span>
            <div class="ged">
              <div class="gcd">匆匆那年</div>
            </div>
            <div class="gad">不如吃茶去</div>
          </div>
        </div>
        <div id="dage">
          <div class="toum"><img src="../images/timg (4).jpg" width="280" height="250" /></div>
          <div class="touming">假装不了——何维健</div>
        </div>
      </div>
  </div>
  </div></div>
    <div class="kong"></div>
  
<div id="sss">
    <div id="xinge"><div id="xingee">
      <div id="xing">
        <div class="shou"><span class="lan">新歌</span> 首发</div>
      </div>
      <div id="mv">
        <div class="shou"><span class="lan">推荐 </span>MV</div>
      </div>
    </div>
      <div id="gequ">
        <div id="gem">
          <hr />
          <div id="biao">
<?php
require_once("newssong.php")
?>
          </div>
        </div>
        <div id="mvg">
          <div id="mvdan"><img src="../images/timg.jpg" width="260" height="200" /></div>
          <div class="mvda"><img src="../images/timg (8).jpg" width="120" height="120" /></div>
          <div class="mvda"><img src="../images/timg (9).jpg" width="120" height="120" /></div>
          <div class="mvzi">致青春</div>
          <div class="mvzi">我并不是那么坚强</div>
        </div></div>
  </div></div>
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