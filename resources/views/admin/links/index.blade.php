@extends('layouts.admin')
@section('content')
    
<div class="crumb_warp">
   
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Links Management
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
                {{--<th width="70">Key word:</th>--}}
                {{--<td><input type="text" name="keywords" placeholder="Key Word"></td>--}}
                {{--<td><input type="submit" name="sub" value="Search"></td>--}}
            {{--</tr>--}}
        {{--</table>--}}
    {{--</form>--}}
{{--</div>--}}

<form action="#" method="post">
    <div class="result_wrap">
        <div class="result_title">
            <h3>Links List</h3>
        </div>
        
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/links/create')}}"><i class="fa fa-plus"></i>Add Link</a>
                <a href="{{url('admin/links')}}"><i class="fa fa-recycle"></i>Link List</a>
            </div>
        </div>
        
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%">Order</th>
                    <th class="tc" width="5%">ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Controll</th>
                </tr>
                @foreach($data as $v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrder(this,{{$v->link_id}})" value="{{$v->link_order}}">
                    </td>
                    <td class="tc">{{$v->link_id}}</td>
                    <td>
                        <a href="#">{{$v->link_name}}</a>
                    </td>
                    <td>{{$v->link_title}}</td>
                    <td>{{$v->link_url}}</td>
                    <td>
                        <a href="{{url('admin/links/'.$v->link_id.'/edit')}}">Alter</a>
                        <a href="javascript:;" onclick="delLinks({{$v->link_id}})">Delete</a>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>
    </div>
</form>

<script>
    function changeOrder(obj,link_id){
        var link_order = $(obj).val();
        $.post("{{url('admin/links/changeorder')}}",{'_token':'{{csrf_token()}}','link_id':link_id,'link_order':link_order},function(data){
            if(data.status == 0){
                layer.msg(data.msg, {icon: 6});
            }else{
                layer.msg(data.msg, {icon: 5});
            }
        });
    }

   
    function delLinks(link_id) {
        layer.confirm('Are you sure the link will be delete', {
            btn: ['Yes','No'] 
        }, function(){
            $.post("{{url('admin/links/')}}/"+link_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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
