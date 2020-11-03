<div id="shortcut-2013">
    <div class="w">
        <ul class="fl lh">
            <li class="fore1 ld" clstag="homepage|keycount|home2013|01a"></li>
        </ul>
        <ul class="fr lh">
            @auth
                <li class="fore1" id="loginbar" clstag="homepage|keycount|home2013|01b">
                    {{Auth::user()->name}}, 欢迎您来到158card！
                    <a href="javascript:;" onclick="document.getElementById('logout_form').submit()">[退出]</a>                    
                    <form action="{{route('logout')}}" method="post" id="logout_form" class="d-none">@csrf</form>
                </li>
                <li class="fore2 ld" clstag="homepage|keycount|home2013|01c">
                    <s></s>
                    <a href="{{route('order.index')}}" rel="nofollow">我的订单</a>
                </li>
            @else
                <li class="fore1" id="loginbar" clstag="homepage|keycount|home2013|01b">
                    您好，欢迎来到158Card！<span><a href="{{route('login')}}">[登录]</a> <a href="{{route('register')}}" class="link-regist">[免费注册]</a></span>
                </li>
            @endauth

            <li class="fore3 ld" clstag="homepage|keycount|home2013|01d">
                <s></s>
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAQCAAAAADhIwqfAAAAbUlEQVQI113OsQqAIBSFYd//DS5cCJ0KmozAN2hxUCxsa7pbODi4GnppqDN90+EXYYBxHWEIAgH0pgFQLDdvEabyzEfTbvepy9JFlhWPyKJsM3VJdzrZlUou6ffyCpWa11kpbAWuulbgsVehfwDgS3Ue0V+LgwAAAABJRU5ErkJggg=="
                />
                <a href="javascript:;" target="_blank" class="typemobile">手机网站</a>
                <div class="two_dimensional_code"><img src="{{asset('assets/images/xm1581.png.pagespeed.ic.pEJDGd_57A.png')}}" pagespeed_url_hash="4122150368"  /></div>
            </li>

            <li class="fore4 ld menu" id="biz-service" data-widget="dropdown" clstag="homepage|keycount|home2013|01e">
                <s></s>
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAALAQMAAABf+9+OAAAABGdBTUEAAK/INwWK6QAAAAZQTFRF5Dk8////PsBbpwAAAB9JREFUCNdjYIACDs0HDCyeAlD8gIGpkwGMGTlhKhgAYqEEGcxLdqYAAAAASUVORK5CYII="
                />
                <span class="outline"></span>
                <span class="blank"></span>
                <a href="javascript:;" target="_blank">VIP会员</a>
            </li>
            <li class="fore4 ld menu" id="biz-service" data-widget="dropdown" clstag="homepage|keycount|home2013|01e">
                <s></s>
                <span class="outline"></span>
                <span class="blank"></span>
                <a href="javascript:;" target="_blank">下载APP</a>
            </li>
            <li class="fore4 ld menu" id="biz-service" data-widget="dropdown" clstag="homepage|keycount|home2013|01e">
                <s></s>
                <span class="outline"></span>
                <span class="blank"></span>
                <a href="javascript:;" target="_blank">我要投诉</a>
            </li>
            <li class="fore2-1 ld"><s></s> <a href="/xilian.php" rel="nofollow" target="_blank" clstag="homepage|keycount|home2013|huiyuanjulebu">西联汇款</a></li>

            <li class="fore5 ld menu" id="site-nav" data-widget="dropdown" clstag="homepage|keycount|home2013|01f">
                <s></s>
                <span class="outline"></span>
                <span class="blank"></span>
                <a href="javascript:;" target="_blank">积分商城</a>
            </li>
        </ul>
        <span class="clr"></span>
    </div>
</div>