@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/51ka_all_CD2ojQSie6.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="cbody">
        <div class="reg" id="registerpage">
            <div class="left">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="title">
                        &nbsp;&nbsp;注册158CARD会员（注册送 50 点积分,并且送优惠券）&nbsp;&nbsp;&nbsp;&nbsp;<span style="cursor: pointer;"><a href="{{route('login')}}">已注册登录</a></span>
                    </div>
                    <div class="line8"></div>
                    <dl>
                        <dt>用戶名：</dt>
                        <dd>
                            <input type="text" name="name" id="username" class="inp1" style="width: 280px;" />
                            <u>*</u>
                            @error('name')
                                <span class="invalid-feedback" style="color: red;font-weight:600;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </dd>
                        <div class="clear"></div>
                    </dl>
                    <dl>
                        <dt>电子邮件：</dt>
                        <dd>
                            <input type="email" name="email" id="email" class="inp1" style="width: 280px;" />
                            <u>*</u>
                            @error('email')
                                <span class="invalid-feedback" style="color: red;font-weight:600;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </dd>
                        <div class="clear"></div>
                    </dl>
                    <dl>
                        <dt>登录密码：</dt>
                        <dd>
                            <input type="password" name="password" id="passwd" class="inp1" style="width: 280px;" />
                            <u>*</u>
                            @error('password')
                                <span class="invalid-feedback" style="color: red;font-weight:600;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </dd>
                        <div class="clear"></div>
                    </dl>
                    <dl>
                        <dt>确认密码：</dt>
                        <dd>
                            <input type="password" name="password_confirmation" id="repasswd" class="inp1" style="width: 280px;" />
                            <u>*</u>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                    <dl>
                        <dt>QQ/微信：</dt>
                        <dd>
                            <input type="text" name="qq_wechat" id="qq" class="inp1" style="width: 280px;" />
                        </dd>
                        <div class="clear"></div>
                    </dl>

                    <dl>
                        <dt>&nbsp;</dt>
                        <dd>
                            <input name="protocol" type="checkbox" id="protocol" value="" checked="" />
                            <label id="pprotocol"><a href="javascript:;" target="_blank">我已阅读并同意158CARD用户服务协议</a> <a href="javascript:;" target="_blank">【阅读协议】</a></label>
                        </dd>
                        <div class="clear"></div>
                    </dl>
                    <dl>
                        <dt>&nbsp;</dt>
                        <dd>
                            <input
                                type="image"
                                src="data:image/webp;base64,UklGRugDAABXRUJQVlA4INwDAACwFQCdASoOASQAPm02mEikIyKhIzmZYIANiWMAemVF47yNhYS9Vu2W8wH68esB6K94n9ADyz/ZV/w+Agajb55P2vyXg5eDe1B/Zcct/qO/O/buMi0+HoMZ3vpLgQCbJcnxJhexTmu46sfc6NBHcYNKQ+nVD8RC2Q3SzrQvdwlnoa3PENNx5aHvwcK1YyJ7V06e33cIq/7IOeIWfzAleNVwxe2XJpTad/exJF+1zov1B2P2a3sTgAD2ZHYCE/vNvoMPR//APxH9GWPf//slFY//tFn/+os/o/TtNhhGOUkkaUYR3WObDrYikVAacSYGcr+XjKaNflel2o1lecRx920NPuaNeHy/RUP1qV937yuPqvGOaM0NkLkYyqKVERXHvaD+pPW83Q291ONL3Qzr8eDDBr/7gaRdW+QYKMvtXjf/hGLf2mEQihJVq52OdeVZX5rTftXyur4JqTww8E9/gN1bMhkDRD/+QXHooF1wqwwYCsdT6UXF0eNm3eE+MKg8cLIZv7i3a1cIqJYnJFZCF6iOf9GIIXHbfu+zMma4i4QKxfqzBcQwhEcCKb5lyCHnwk/XT+351lXNjSPtJF88x8R0BQlJGFkWBWpLNL+V4+4rncXbLxe2bXdg3w+I8e2YF67hCrDqjM628rJtMspFdcVe3kqL2408FBVEBLfjMXPcGB5e/vFE1tsjV6CWEIqcBlTOzYS04b+6rctVdbyBeToT/Laf1O1Pfbb6VEqvnhyw3qcu54tej/Gm75Y/k31+Ll2I11xKPmpDqt9ygQiZp/axItwO7O6Bw67Tw/wSyxro/9NhUFAWOuJdGnWQP+37NP3yNGTxpvuCv5Xir+Ov6l3IEPs2N4YV0NF2E1DcySEgKXRdRje9zw/ZNdlQNvhPva76pyhKeFongjIPt8OihaT+VqRcvpJlrLWDfvAfyUlLAbNrtvFd4ncZUna92p9MqeHJvR7OG/1Vo8297Wmt0QEcOxkQ2/xigQoS8b2hPfgHHPnZkRv0fpAeX59Uzb0jWN6ELr+x3irM25ZHm/D0r/0xILZduWDlsgi1x/weYxPBP2Xw5wfucueUjTi6Mo1ASM2rf65BjLJnu67ml3GdtqFUUMrqHqvW92j6pjzlU7Cf+RR7xJ8oW9B6Uh4qeOKql8SGmlIYU+bR5d0ban9heaBMIlu+GS4w54CvsGgirJKay+Tus5zqAwao9C8Nbd+y9yjpQliPH3L3HrgZ+7TF2dDJL1q7lS5OBwmKSCeLxvfkX8TC6SYYWgVeIMQGggglM22bQwMe0tEquWMZQrW3pTJFhy9o/f2dG2dXpQAA"
                                name="submit"
                            />
                        </dd>
                        <div class="clear"></div>
                    </dl>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@endsection
