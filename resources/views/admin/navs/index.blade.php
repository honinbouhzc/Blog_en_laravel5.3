@extends('layouts.admin')
@section('content')
       
<div class="crumb_warp">
    
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Navigator Management
</div>

{{--<div class="search_wrap">--}}
    {{--<form action="" method="post">--}}
        {{--<table class="search_tab">--}}
            {{--<tr>--}}
                {{--<th width="120">Category:</th>--}}
                {{--<td>--}}
                    {{--<select onchange="javascript:location.href=this.value;">--}}
                        {{--<option value="">All</option>--}}
                        {{--<option value="http://www.google.com.au">Google</option>--}}
                        {{--<option value="http://www.baidu.com">Baidu</option>--}}
                    {{--</select>--}}
                {{--</td>--}}
                {{--<th width="70">Key Word:</th>--}}
                {{--<td><input type="text" name="keywords" placeholder="Key Word"></td>--}}
                {{--<td><input type="submit" name="sub" value="Search"></td>--}}
            {{--</tr>--}}
        {{--</table>--}}
    {{--</form>--}}
{{--</div>--}}

<form action="#" method="post">
    <div class="result_wrap">
        <div class="result_title">
            <h3>Nav List</h3>
        </div>
    
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/navs/create')}}"><i class="fa fa-plus"></i>Add Nav</a>
                <a href="{{url('admin/navs')}}"><i class="fa fa-recycle"></i>Nav List</a>
            </div>
        </div>
    
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%">Order</th>
                    <th class="tc" width="5%">ID</th>
                    <th>Nav Name</th>
                    <th>Alias</th>
                    <th>Url</th>
                    <th>Controll</th>
                </tr>

                @foreach($data as $v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrder(this,{{$v->nav_id}})" value="{{$v->nav_order}}">
                    </td>
                    <td class="tc">{{$v->nav_id}}</td>
                    <td>
                        <a href="#">{{$v->nav_name}}</a>
                    </td>
                    <td>{{$v->nav_alias}}</td>
                    <td>{{$v->nav_url}}</td>
                    <td>
                        <a href="{{url('admin/navs/'.$v->nav_id.'/edit')}}">Edit</a>
                        <a href="javascript:;" onclick="delLinks({{$v->nav_id}})">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</form>

<script>
    function changeOrder(obj,nav_id){
        var nav_order = $(obj).val();
        $.post("{{url('admin/navs/changeorder')}}",{'_token':'{{csrf_token()}}','nav_id':nav_id,'nav_order':nav_order},function(data){
            if(data.status == 0){
                layer.msg(data.msg, {icon: 6});
            }else{
                layer.msg(data.msg, {icon: 5});
            }
        });
    }

   
    function delLinks(nav_id) {
        layer.confirm('Are you sure the navigato will be deleted？', {
            btn: ['Yes','No'] 
        }, function(){
            $.post("{{url('admin/navs/')}}/"+nav_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status==0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
//            
        }, function(){

        });
    }



</script>

@endsection
