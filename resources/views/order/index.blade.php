@extends('layouts.app')

@section('styles')    
    <link rel="stylesheet" href="{{asset('assets/css/custom_order.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/A.51ka_all_8N468jd.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/A.kf.css.pagespeed.cf.AJN6X92mno.css')}}">
@endsection

@section('content')
    <div id="wrapper">
        @include('layouts.side')

        <div class="indbox6">
            <div class="title3">
                <strong>订单列表</strong>
            </div>
            <br />

            <div align="center">
                <form action="" method="post">
                    @csrf
                    商品名称：<input name="keyword" type="text" id="KeyWords" size="50" value="" />&nbsp;&nbsp;<input type="submit" name="Submit" value="  搜索  " /><input type="hidden" name="stat_r" value="" />
                </form>
            </div>
            <br />
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="FFE275">
                <tbody>
                    <tr class="tr-th">
                        <td height="30" bgcolor="FFFBE7"><div align="center">订单号</div></td>
                        <td height="30" bgcolor="FFFBE7"><div align="center">商品名称</div></td>
                        <td height="30" bgcolor="FFFBE7"><div align="center">金额</div></td>
                        <td height="30" bgcolor="FFFBE7"><div align="center">下单日期</div></td>
                        <td height="30" bgcolor="FFFBE7"><div align="center">订单状态</div></td>
                        <td height="30" bgcolor="FFFBE7"><div align="center">订单操作</div></td>
                    </tr>
                    <tr>
                        <td height="90" colspan="6" bgcolor="#FFFFFF">
                            <div align="center">
                                总共有0条记录 <span>1/0</span><span> 首页 </span><span> 上一页 </span><font color="red">1</font><a href="order.php?leftid=1&amp;leftidid=3&amp;page=0"> 下一页 </a>
                                <a href="order.php?leftid=1&amp;leftidid=3&amp;page=0"> 尾页 </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="h15"></div>
        </div>
    </div>
@endsection