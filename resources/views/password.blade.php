@extends('layouts.app')

@section('styles')    
    <link rel="stylesheet" href="{{asset('assets/css/custom_order.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/A.51ka_all_8N468jd.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/A.kf.css.pagespeed.cf.AJN6X92mno.css')}}">
@endsection

@section('content')
    <div id="wrapper">
        @include('layouts.side')
        <div id="content" class="clearfix">
            <div class="contentTitle clearfix">
                <div class="contentTitleText">修改密码</div>
            </div>
            <form action="{{route('save_password')}}" method="post" name="form1">
                @csrf
                <div class="contentBody">
                    <div class="alertContent clearfix">
                            <div class="alertContentText">为了您的账户安全，158card建议您设置密码时，尽量使用英文字母、数字和字符的组合。</div>
                            <div class="clear"></div>
                    </div>
                    <div class="h15"></div>
                    <div class="userInfo">
                        <ul>
                            <li class="userInfoL">原登录密码：</li>
                            <li class="userInfoR">
                                <input class="width150px" type="password" name="original_password" id="formFocus"> 密码长度6~20位，可以由英文字母、数字和字符组成，英文字母请区分大小写
                                @error('original_password')
                                    <p style="margin:0;color:red;font-weight:bold">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </li>
                        </ul>
                        <ul>
                            <li class="userInfoL">新登录密码：</li>
                            <li class="userInfoR">
                                <input class="width150px" type="password" autocomplete="off" name="password"> 密码长度6~20位，可以由英文字母、数字和字符组成，英文字母请区分大小写
                                @error('password')
                                    <p style="margin:0;color:red;font-weight:bold">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </li>
                        </ul>
                        <ul>
                            <li class="userInfoL">重复新密码：</li>
                            <li class="userInfoR">
                                <input class="width150px" type="password" datatype="Repeat" to="newpasswd" msg="两次输入的密码不一致" name="password_confirmation" id="repasswd" value="" maxlength="32">
                            </li>
                        </ul>
                    </div>
                    <div class="h15"></div>
                    <div class="operateButton">
                            <div class="h10"></div>
                            <input type="submit" name="Submit" class="ButtonTwoConfirm" value="修改">　 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection