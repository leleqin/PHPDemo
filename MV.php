<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MV</title>
<link href="css/siquan.css" rel="stylesheet" type="text/css" />
<link href="css/lrtk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/koala.min.1.5.js"></script>
</head>

<body>
<div>
      <nav>
        <ul>
          <li><a href="index.php">乐库</a></li>
          <li><a href="songer.php">歌手</a></li>
			<li><a href="MV.php">MV</a></li>
          <li><a href="quite.php">退出登录</a></li>
          <li><a href="manager.php">管理员登录</a></li>
        </ul>
	</nav></div>
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

  <div id="gun"><div id="fsD1" class="focus" style="/* [disabled]margin-left:400px; */">  
    <div id="D1pic1" class="fPic">  
        <div class="fcon" style="display: none;">
            <a target="_blank" href="http://www.lanrentuku.com/"><img src="images/QQ截图20170614092247.png" "></a>
            <span class="shadow"><a target="_blank" href="http://ln.qq.com/a/20140625/015503.htm">GD——无题</a></span>
        </div>
        
        <div class="fcon" style="display: none;">
            <a target="_blank" href="http://www.lanrentuku.com/"><img src="images/QQ截图20170614092324.png" style="opacity: 1; "></a>
            <span class="shadow"><a target="_blank" href="../image/timg (9).jpg">张杰——X-Ambassadors-Torches</a></span>
        </div>
        
        <div class="fcon" style="display: none;">
            <a target="_blank" href="http://www.lanrentuku.com/"><img src="images/QQ截图20170614092342.png" style="opacity: 1; "></a>
            <span class="shadow"><a target="_blank" href="http://ln.qq.com/a/20140625/015503.htm">张碧晨，赵丽颖——望</a></span>
        </div>
        
        <div class="fcon" style="display: none;">
            <a target="_blank" href="http://www.lanrentuku.com/"><img src="images/QQ截图20170614092354.png"images/04.jpg" style="opacity: 1; "></a>
            <span class="shadow"><a target="_blank" href="http://ln.qq.com/a/20140625/015503.htm">金南岭——子夜歌</a></span>
        </div>    
    </div>
    <div class="fbg">  
    <div class="D1fBt" id="D1fBt">  
        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>  
        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>  
        <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>3</i></a>  
        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>  
    </div>  
    </div>  
    <span class="prev"></span>   
    <span class="next"></span>    
</div>  
    <div id="mv">
     <div id="pai">MV热播总排行</div>
     <div id="xbiao">
       <table width="291" height="332" border="0">
         <tr>
           <td height="30">杨宗纬张碧晨——凉凉</td>
         </tr>
         <tr>
           <td>筷子兄弟——小苹果</td>
         </tr>
         <tr>
           <td>王蓉——小鸡小鸡</td>
         </tr>
         <tr>
           <td>李玉刚——因为刚好遇见你</td>
         </tr>
         <tr>
           <td>儿童歌曲——小毛驴</td>
         </tr>
         <tr>
           <td>张杰——这就是爱</td>
         </tr>
         <tr>
           <td>金南菱——逆流成河</td>
         </tr>
         <tr>
           <td height="35">儿童歌曲——小青蛙</td>
         </tr>
         <tr>
           <td height="30">儿童歌曲——两只老虎</td>
         </tr>
         <tr>
           <td height="27">筷子兄弟——小水果</td>
         </tr>
       </table>
     </div>
<script type="text/javascript">
	Qfast.add('widgets', { path: "js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',   //焦点图包裹id  
			conId: "D1pic1",  //** 大图域包裹id  
			tabId:"D1fBt",  
			tabTn:"a",
			conCn: '.fcon', //** 大图域配置class       
			auto: 1,   //自动播放 1或0
			effect: 'fade',   //效果配置
			eType: 'click', //** 鼠标事件
			pageBt:true,//是否有按钮切换页码
			bns: ['.prev', '.next'],//** 前后按钮配置class                          
			interval: 3000  //** 停顿时间  
		}) 
	})  
      </script>
    </div>
   
  </div>
  <div class="kongq"></div>
  <div id="bang">
    <div id="fen">MV分类</div>
    <div id="tui">新歌推荐</div>
    <div id="xingee">
      <div class="xinn">新歌推荐</div>
      <div class="xin">欧美专区</div>
      <div class="xin">日韩专区</div>
      <div class="xin">华语专区</div>
    </div>
    <div id="datu">
		<div>
		  <video width="200" height="150" controls="controls">
  <source src="upfiles/MV/任宇翔 - 一人我饮酒醉.mp4" type="video/mp4"></video>&nbsp;&nbsp;&nbsp;&nbsp;
		  <video width="200" height="150" controls="controls">
		    <source src="upfiles/MV/白举纲 - 走了.mp4" type="video/mp4" />
	      </video>&nbsp;&nbsp;&nbsp;&nbsp;
		  <video width="200" height="150" controls="controls">
		    <source src="upfiles/MV/胡夏 - 夏至未至.mp4" type="video/mp4" />
	      </video>
		</div>
     	<div id="name">
     	  <table width="654" border="0">
     	    <tbody>
     	      <tr>
     	        <th width="184" height="45" scope="col">任宇翔 - 一人我饮酒醉</th>
     	      
     	        <th width="302" scope="col">白举纲 - 走了</th>
     	        <th width="154" scope="col">胡夏 - 夏至未至</th>
   	        </tr>
   	      </tbody>
   	    </table>
     	</div>
     	<br>
      <div>
      <video width="200" height="150" controls="controls">
  <source src="upfiles/MV/薛之谦 - 暧昧.mp4" type="video/mp4"></video>&nbsp;&nbsp;&nbsp;&nbsp;
  <video width="200" height="150" controls="controls">
    <source src="upfiles/MV/宇宙少女 - HAPPY 眼神接触版.mp4" type="video/mp4" />
  </video>&nbsp;&nbsp;&nbsp;&nbsp;
  <video width="200" height="150" controls="controls">
    <source src="upfiles/MV/张杰 - Torches.mp4" type="video/mp4" />
  </video>
      </div>
   <div id="name">
     	  <table width="654" border="0">
     	    <tbody>
     	      <tr>
     	        <th width="182" height="45" scope="col">薛之谦 - 暧昧</th>
     	        <th width="305" scope="col">宇宙少女 - HAPPY 眼神接触版</th>
     	        <th width="153" scope="col">张杰 - Torches</th>
   	        </tr>
   	      </tbody>
   	    </table>
     	</div>   
      
   
    </div>
  </div> 
    <div id="wei">
      <div id="kongs">关于我们</div>
      <div class="kong">客服中心</div>
      <div class="kong">软件下载</div>
      <div class="kong">联系我们</div>
      <div id="ban">版权所有&nbsp;|&nbsp;联系QQ：602568224&nbsp;|&nbsp;联系电话：000001010010 </div>
    </div>
</div></div>
</body>
</html>