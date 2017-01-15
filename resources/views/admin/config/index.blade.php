@extends('layouts.admin')
@section('content')
       
<div class="crumb_warp">
   
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Configuration
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

    <div class="result_wrap">
        <div class="result_title">
            <h3>List</h3>
            @if(count($errors)>0)
                <div class="mark">
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @else
                        <p>{{$errors}}</p>
                    @endif
                </div>
            @endif
        </div>
       
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/config/create')}}"><i class="fa fa-plus"></i>Add</a>
                <a href="{{url('admin/config')}}"><i class="fa fa-recycle"></i>List</a>
            </div>
        </div>
    
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <form action="{{url('admin/config/changecontent')}}" method="post">
                {{csrf_field()}}
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%">Order</th>
                    <th class="tc" width="5%">ID</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Controll</th>
                </tr>

                @foreach($data as $v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrder(this,{{$v->conf_id}})" value="{{$v->conf_order}}">
                    </td>
                    <td class="tc">{{$v->conf_id}}</td>
                    <td>
                        <a href="#">{{$v->conf_title}}</a>
                    </td>
                    <td>{{$v->conf_name}}</td>
                    <td>
                        <input type="hidden" name="conf_id[]" value="{{$v->conf_id}}">
                        {!! $v->_html !!}
                    </td>
                    <td>
                        <a href="{{url('admin/config/'.$v->conf_id.'/edit')}}">Alter</a>
                        <a href="javascript:;" onclick="delLinks({{$v->conf_id}})">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="btn_group">
                <input type="submit" value="Submit">
                <input type="button" class="back" onclick="history.go(-1)" value="Return" >
            </div>
            </form>
        </div>
    </div>

<script>
    function changeOrder(obj,conf_id){
        var conf_order = $(obj).val();
        $.post("{{url('admin/config/changeorder')}}",{'_token':'{{csrf_token()}}','conf_id':conf_id,'conf_order':conf_order},function(data){
            if(data.status == 0){
                layer.msg(data.msg, {icon: 6});
            }else{
                layer.msg(data.msg, {icon: 5});
            }
        });
    }

    
    function delLinks(conf_id) {
        layer.confirm('Are you sure the Configuration will be deleted?', {
            btn: ['Yes','No'] 
        }, function(){
            $.post("{{url('admin/config/')}}/"+conf_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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
