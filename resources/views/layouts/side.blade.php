@php
    $menu = config('site.menu');
@endphp
<!--leftNav-->
<div id="menuLeft">
    <dl id="openNow">
        <dt><a href="#none">账户管理</a></dt>
        <dd>
            <a @if($menu == 'order') id="anow" @endif href="{{route('order.index')}}">点卡订单</a>
        </dd>
    </dl>
    <dl id="openNow">
        <dt><a href="#none">个人信息</a></dt>
        <dd>
            <a @if($menu == 'verification') id="anow" @endif href="{{route('verification')}}">实名认证</a>
        </dd>
        <dd>
            <a @if($menu == 'profile') id="anow" @endif href="{{route('profile')}}">基本信息</a>
        </dd>
        <dd>
            <a @if($menu == 'password') id="anow" @endif href="{{route('change_password')}}">修改密码</a>
        </dd>
    </dl>

    <dl id="openNow">
        <dt><a href="#none">安全设置</a></dt>
        <dd>
            <a href="javascript:;" onclick="document.getElementById('logout_form').submit()">退出登录</a>
        </dd>
    </dl>
</div>
<!--leftNav end-->