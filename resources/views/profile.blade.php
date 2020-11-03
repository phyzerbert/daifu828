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
                <div class="contentTitleText">修改信息</div>
            </div>
            <form action="{{route('profile.update')}}" method="post" name="form1">
                @csrf
                <div class="contentBody">
                    <div class="alertContent clearfix">
                        <div class="alertContentText">paypal电子邮件地址、姓名不能直接修改，如需修改请联系客服人员。</div>
                        <div class="clear"></div>
                    </div>
                    <div class="h15"></div>
                    <div class="userInfo">
                        <ul>
                            <li class="userInfoL">邮件地址：</li>
                            <li class="userInfoR">{{Auth::user()->email}}</li>
                        </ul>
                        <ul>
                            <li class="userInfoL">姓名：</li>
                            <li class="userInfoThreeM">{{Auth::user()->name}}</li>
                        </ul>
                        <div div id="securityDiv"></div>
                        @php
                            $countries = \App\Models\Country::all();
                        @endphp
                        <ul>
                            <li class="userInfoL">所在国家：</li>
                            <li class="userInfoR">
                                <select id="countrySelect" name="country_id" style="padding:0px;padding:0px!important;">
                                    <optgroup label="选择您目前所在国家">
                                        @foreach ($countries as $item)
                                            <option value="{{$item->id}}" countrynum="{{$item->number}}" @if(Auth::user()->country_id == $item->id) selected @endif>{{$item->name}}({{$item->code}})</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </li>
                        </ul>
                        <ul>
                            <li class="userInfoL">联系QQ：</li>
                            <li class="userInfoR">{{Auth::user()->qq_wechat}}</li>
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