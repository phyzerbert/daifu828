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
                <div class="contentTitleText">实名认证</div>
            </div>
            <form action="{{route('verification.submit')}}" method="post" name="form1" enctype="multipart/form-data">
                @csrf
                @if (Auth::user()->verification_status == '')
                    <div class="contentBody">
                        <div class="alertContent clearfix">
                            <div class="alertContentText">
                                <p>为确保用户信用卡支付安全<br>
                                需要提供付款人的有效证件，包括<b>学生证，护照，驾照</b>等有效的证件图片完成实名认证。<br>
                                上传完成后请联系客服QQ:536272789完成实名认证</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="h15"></div>
                        <div class="userInfo">
                            <ul>
                                证件号码： 
                                <input name="card_id" type="text" id="cardid"><br>
                            </ul>
                            <ul>
                                证件照片： 
                                <input type="file" name="attachment" width="200px">
                            </ul>
                            <br><br>
                            <input type="submit" name="Submit2" class="ButtonTwoConfirm" value="我要实名认证">                        
                        </div>
                        <div class="h15"></div>
                        <div class="operateButton">
                            <div class="h10"></div>                　 
                        </div>
                    </div>
                @elseif(Auth::user()->verification_status == 1)
                    <div class="contentBody">
                        <div class="alertContent clearfix">
                            <div class="alertContentText">
                                <p>为确保用户信用卡支付安全<br>
                                需要提供付款人的有效证件，包括<b>学生证，护照，驾照</b>等有效的证件图片完成实名认证。<br>
                                上传完成后请联系客服QQ:536272789完成实名认证</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="h15"></div>
                            <div class="userInfo">
                            <font color="#0000FF">客服正在审核</font>        
                        </div>
                        <div class="h15"></div>
                        <div class="operateButton">
                            <div class="h10"></div>            　 
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection