<!DOCTYPE html>
<html>
 <head> 
  <include file="Public:top" />
  <title>找回密码-确认帐号</title> 

   <import type="css" file="theme,common,forget_password" basepath="__PUBLIC__/common/css"/>
 </head> 
 <body> 
  <div id="wrapper" class=""> 
   <div id="head"> 
    <div class="mod-header"> 
     <a href="__ROOT__/"><img src="__PUBLIC__/common/images/search_logo_modify.png" alt="logo" /></a>
    </div>
    <div id="mod-header-topBar" class="mod-userbar"></div> 
   </div> 
   <div id="nav"> 
    <div class="nav-2"> 
     <div class="mod-nav clearfix"> 
      <h1 class="page-type-notab">找回密码</h1> 
     </div>
    </div> 
   </div> 
   <div id="content"> 
    <div class="mod-forgot"> 
     <ul class="mod-sub-nav"> 
      <li class="mod-sub-list1<?php if($step==1):?> list1-active<?php endif;?>">确认帐号 </li>
      <li class="mod-sub-list2<?php if($step==2):?> list2-active<?php endif;?>">接受邮件 </li>
      <li class="mod-sub-list3<?php if($step==3):?> list3-active<?php endif;?>">重置密码 </li>
     </ul> 
     <?php if($step==1):?>
     <form action="{:U('User/doForgetPassword')}" method="post" id="forgotsel"> 
      <div class="mod-step-detail"> 
       <p class="step-email-info">请填写您需要找回的帐号:</p> 
       <div class="pass-input-container clearfix" id="pass-auth-select"> 
        <input type="text" class="pass-input" name="username" value="" id="account" placeholder="请您输入用户名" />         
        <span id="username-error" class="pass-input-msg"></span> 
       </div> 
       <div class="pass-input-container vcode-container clearfix"> 
        <input type="text" class="pass-input vcode-input" name="verifyCode" value="" id="veritycode" placeholder="请输入验证码" /> 
        <img id="TANGRAM__PSP_4__verifyCodeImg" class="vcode-img" alt="验证码图片" title="验证码图片" src="{:U('User/verifyCode')}"/> 
        <a id="TANGRAM__PSP_4__verifyCodeChange" href="javascript:void(0)" class="vcode-img-change">看不清？</a> 
        <span id="code-error" class="pass-input-msg"></span> 
       </div> 
       <div> 
        <input type="submit" name="" value="下一步" class="pass-button-submit" id="pass-button-submit" /> 
       </div> 
      </div> 
     </form> 
   <?php elseif($step==2):?>
    <div class="mod-step-detail" style="position:relative;"> 
   <div class="forgot-auth-container"> 
    <p class="step-form-info">系统已经将重置密码邮件发到您注册时的邮箱，请点击邮件中的链接进行重置操作。</p> 
   </div> 
   
  </div>
<?php else:?>
  <div class="mod-step-detail"> 
   <p class="step-form-tip m_l80">您正在找回的帐号是：{$user_info.user_name}</p> 
   <form action="{:U('User/resetPassword')}" method="post" id="form-resetpwd"> 
    <div class="pass-input-container clearfix"> 
     <label class="pass-input-title" for="password">新密码</label> 
     <input type="password" class="pass-input left" name="password" id="password" value="" autocomplete="off" style="cursor: auto;" /> 
     <span id="password-error" class="pass-input-msg"></span> 
    </div> 
    <div class="pass-input-container clearfix"> 
     <label class="pass-input-title" for="repassword">确认新密码</label> 
     <input type="password" class="pass-input left" name="verifypwd" id="verifypwd" value="" autocomplete="off" style="cursor: auto;" /> 
     <span id="verifypwd-error" class="pass-input-msg"></span>
    </div> 
    <div class="m_l80"> 
     <input type="hidden" name="key" value="{$key}" />
     <input class="pass-button-submit" type="submit" name="" value="确定" id="submit-resetpwd" /> 
    </div> 
   </form> 
  </div>
   <?php endif;?>
    </div> 
   </div> 
   <div id="foot"> 
    <include file="Public:footer" />
   </div> 
  </div>  
 
 <script>var PUBLIC="__PUBLIC__";var MODULE="__MODULE__";</script>
 <import type="js" file="libs,common,jquery#form" basepath="__PUBLIC__/common/js" />
 <include file="Public:bottom" />

 </body>
</html>