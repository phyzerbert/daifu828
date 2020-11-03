<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daifu828</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="login">
        <a href="/">
            <div class="logo"></div>
        </a>
        <div class="w-box">
            <form name="formLogin" action="{{route('login')}}" method="post" class="form_box">
                @csrf
                <label for="email" class="login_label"></label>
                <input name="email" type="text" class="email" value="" id="email" placeholder="邮箱/用户名">
                <label for="password" class="pwd_label"></label>
                <input name="password" type="password" id="password" placeholder="密码">
                <div class="t">
                    <span id="qqspan" name="qqspan"><a href="javascript:;" target="_blank" rel="nofollow" class="qq fl">在线客服</a></span>
                    <a href="javascript:;" target="_blank" class="text fr">忘记密码</a>
                </div>
                <input name="submit" type="submit" value="登 录" class="dl">
                <a href="javascript:;" onclick="javascript :history.back(-1);" class="text fl" style="margin-top:5px;width: 100px;font-size: 12px;">返回上一步 &gt;&gt;</a>
                <div class="other_login_box">
                    <a href="javascript:;">
                        <span class="spanLo">&nbsp;QQ登录</span>
                    </a>
                    <i class="line_login"></i>
                    <a href="javascript:;">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABfVBMVEU+sTX///8+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTU+sTXocbAvAAAAfnRSTlMAAAIDBQYHCAkOEBESExUWFxgZHB8gISYoKisuMTI3ODk6PD9CSEpLTE1PUVRWV1hZWltdYGFiaGlwcnN1e3x+gIGCg4SFh4iJioySlJWWmZqbnJ6foKKkpq+wsrO0wMXGx8jJys3P0NLU3+bn6err7O3u7/L09vf4+fr7/P6uMHB/AAABk0lEQVQoz32TiT8CQRTH37RKkTNHziJHQoTITSS0ichRrlw521KI2L/dzM5eZT9+n8/um9nv7uy8934DIMkwHL7mikUuyboMSJIEa4KvvKys31yKp1SQKO1RYX2M/6MII2H9Ga+hBCPiGK+pXYqnxWnu/jZdwj0E1+XI8DvapcOvtgbeFMyZMd4ioxeblKHlRuFrCIx5HD86ANoqMWzRI9ODkr8B3CSuAozwmwCD/DZCduVzF0RJaAZoDNkBGnYcTOfAk4xZSJG1lcIvsR6b3Xv6Q/EVCL/WidS0306LaXukewchdIs4WAtiLywceV6kOE6pdRwgnELo8BwhH8V5gc8LeAbn1jOKUN8QQma6+B3dxCLBc/iSnVDAT5M0MVwg44SjaaFewVaamJvivWdyX1ZwjJbFmFf1qNArYZ9YVAiqe/g+S23oFGZ+0tBSm2WO1zdOjvoFw1UTO3g1nPIl2wHgQNtMEcmKCS0aZ2QjR/8zMtZkpuwYjJUeInMgq9r9SlXZGcNOcLGX6c9C+iLkrJAL/wsqUP22OCrziwAAAABJRU5ErkJggg==" alt="" class="LoginLogo">
                        <span class="spanLo">&nbsp;微信登录</span>
                    </a>
    
                    <a href="{{route('register')}}" class="zc" style="float: right">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAV1BMVEUAAADvMDDnODjkNTrnOT3jODzlNzrmOTnkODvkODrjNzzkOTvlODzjODzkOTvkOTrkODvkODvjOTzjOTvkODzjODzkOTvkODvkODvkOTvjOTzjODzkOTzBJ49GAAAAHHRSTlMAECAwP0BPUF9gb3B/gI+Qn6CvsL/Az9Df4O/wQqu59AAAAaVJREFUWMO9V9uWgyAMDLIttYrWC1Zi/v8796Xtri2BIHt2XnXGYCYJAWCgzu04r0RE6zy2ZwVZ0N1Cb1g6LWWr60pBrFdJHKpFYoFtUuISoRMR4SVKr2ZKYq54vkESAA3H70iILsy/kRi3EH+kDIxF3w/G0FMm+rf/T9nY5aLCfAH87YeZDmD+4dd0CPWrfvCYAD4ry9JBWEEAzqVDaPg3Ng2gN/55AwAAa+I3RRRWAAAdifEECQWdMPHDr7xCDwCLINWswgKgRGZhFVSyjBIKJu2iuIKFiYoUJnBUpOBCNvL2tAfwCgsE/MuOr5DnIBQVC/c/Aph3BB+osfZrjyc/0Dh8ThoxmMapiE+D3MrIWNkU8clIyxnZcoZ7Cf8ubGkYe0HQVDHaVENW2rd1nu9TgwV1lP8YLGqLzfDY5H8WfulwjYcgCKD8ggGSkow3nurAIbbqL6955RdNgCGPP3x2zKmQnxXDEO7a/eHzv3IhyuZmIkuXwFGuiu5tdSKIrU4unjYisVnR7towPco34hVc9x+9+t7rvAVeGTs5T0Tk3WQN++1vgqE/aCjyAcoAAAAASUVORK5CYII=" class="right_now" pagespeed_url_hash="2022446484">
                    立即注册
                    </a>
                </div>    
            </form>
        </div>
        <div class="foot">
            <a href="javascript:;" target="_blank">联系我们 </a>|<a href="javascript:;" target="_blank"> 公司简介</a><br>
            ©2005-2018 158Card.com 版权所有，并保留所有权利。    
        </div>
    </div>
</body>
</html>