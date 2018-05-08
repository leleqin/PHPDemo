<?php
ob_start();
session_start();
require_once("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>用户登陆</title> 
<meta name="keywords" content="网站模板下载,网站后台登录模板,后台登录模板HTML,后台模板登录,后台登录模板下载" />
<meta name="description" content="JS代码网提供大量的网站后台模板下载以及手机网站模板下载" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="images/login.js"></script>
<link href="css/login2.css" rel="stylesheet" type="text/css" />
</head>
<?php 
if(isset($_POST['denglu'])){
	$uname=$_POST['uname'];
	$upsw=$_POST['upsw'];
	$sql="select * from user where uname='$uname' and upsw='$upsw'";
	$rs=mysql_query($sql);
	$usernum=mysql_num_rows($rs);
	echo $usernum;
	if($usernum>=1)
	{
		$_SESSION['gly']=$uname;
		
		header("location:index.php");
		//echo "<script language='javascript'>parent.history.go(-2);</script>";
		
	}
	else{
	header("location:login.php");	
	return false;
	}
}
?>

<h1>GIVE YOU THE MUCSIC FEAST</h1>

<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form">
				<form action="" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="uname" name="uname" class="inputstyle" placeholder="请输入用户名"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="upsw" name="upsw" class="inputstyle" placeholder="请输入密码"/>
                </div>
                </div>
               
                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue" id="denglu" name="denglu"/></div>
              </form>
           </div>
           
           	  </div>
               
            </div>
            <!--登录end-->
  </div>

  <!--注册-->
   <?php
if(@isset($_POST['zhuce']))
{
	$_uname=$_POST['uname'];
	$_upsw=$_POST['upsw'];
	
	
	$zhuce_aql="insert into user(uname,upsw) values('$_uname','$_upsw')";
	//echo $tianjia_aql;
	mysql_query($zhuce_aql);
	//echo $zhuce_aql;
	header("location:login.php");
}
?>
    <div class="qlogin" id="qlogin" style="display: none; ">
   
    <div class="web_login"><form name="form2" id="regUser" accept-charset="utf-8"  action="" method="post">
	      <input type="hidden" name="to" value="reg"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
        		<div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                	
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="uname" name="uname" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="upsw"  name="upsw" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                
                <li>
                    <div class="inputArea">
                        <input type="submit" id="zhuce" name="zhuce"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册"/> <a href="#" class="zcxy" target="_blank">注册协议</a>
                    </div>
                    
                </li><div class="cl"></div>
        </ul></form>
           
    
    </div>
   
    
    </div>
    <!--注册end-->
</div>
<div id="bottom"><a href="manager.php">管理员登录</a></div>
<div class="jianyi"></div>
</body></html>