@php
    $page = config('site.page');
@endphp
<div class="nav" id="J_nav">
    <ul class="nav_list">
        <li class="nav_item @if($page == 'home') selected @endif" id="J_nav_1"><a href="/" target="_parent">首页</a></li>
        <li class="nav_item" id="J_nav_2"><a href="javascript:;" title="海外游戏点卡">点卡</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="腾讯Q币">Q币</a></li>
        <li class="nav_item @if($page == 'alipay') selected @endif" id="J_nav_6"><a href="{{route('order.create')}}" title="淘宝代购">支付宝代购</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="腾讯游戏">微信游戏</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="神州行充值卡">158一卡通</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="Itunes充值">Itunes充值</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="网易宝">网易点卡</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="直播平台">直播平台</a></li>
        <li class="nav_item" id="J_nav_6"><a href="javascript:;" title="游戏代充">万能代充</a></li>
        <li class="nav_item" id="J_nav_3"><a href="javascript:;" title="台服点卡">台服</a></li>
        <li class="nav_item" id="J_nav_4"><a href="javascript:;" title="港服点卡">港服</a></li>
        <li class="nav_item last" id="J_nav_8"><a href="javascript:;" title="5173代购">5173代购</a></li>
    </ul>
</div>