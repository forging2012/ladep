<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="手机小说阅读网">
    <meta name="description" content="手机小说阅读网,小说手机阅读。手机小说阅读网提供最新章节首发">
    <meta name="format-detection" content="telphone=no, email=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="{{asset('/wap/css/style.css')}}" rel="stylesheet" type="text/css" ladep="1">
    <link href="{{asset('/wap/css/userinfo_form.css')}}" rel="stylesheet" type="text/css" ladep="1">
    <base target="_self">
    <link href="{{asset('/wap/images/logo-114-114.png')}}" rel="apple-touch-icon">
    <link href="{{asset('/wap/images/logo-114-114.png')}}" rel="Shortcut Icon" type="image/x-icon">
</head>
<body>
<section>
    <h1><a href="/web/userinfo" target="_self"><img src="{{asset('/wap/images/return_left.png')}}"></a>解绑手机</h1>
    <form class="userinfo_form">
        <input type="text" value="" class="bggray" id="un_user_phone_num" disabled="disabled">
        <p>
            <input type="text" value=""  class="w60" id="phone_verificationCode" >
            <input type="button" value="获取验证码" class="w35 authcode bgblue disabled"  id="un_phone_verificationcode_btn">
        </p>
        <p class="red phone_regtext" >&nbsp;</p>
        <input type="button" value="解&nbsp;&nbsp;绑" id="un_phone_bind_btn">
    </form>
</section>
<section class="windowlayer">
    <div class="graywindow"></div>
    <div class="tooltipmsg">
        <h4>解绑手机<a href="###" class="close" >×</a></h4>
        <p>已绑定手机号：<font id="usermsg_phone_num_div"><span id="usermsg_phone_num"></span></font></p>
        <p>替换手机号请先解除绑定状态</p>
        <span class="btn close">解绑手机号</span>
    </div>
</section>
<div class='ajax_aplly_error'></div>
<script src="{{asset('/wap/js/jquery-1.11.3.js')}}" ladep="1"></script>
<script src="{{asset('/wap/js/userinfo_bind_phone.js')}}" ladep="1"></script>
<script src="{{asset('/wap/js/userinfo_loaddata.js')}}" ladep="1"></script>
<script>
    var g_CAccountCenter_BindingMsg=new CAccountCenter_BindingMsg();
    $(function(){
        g_CAccountCenter_BindingMsg.OnDocumentReady();
    })
</script>
</body>
</html>