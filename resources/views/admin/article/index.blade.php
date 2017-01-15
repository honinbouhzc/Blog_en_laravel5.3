@extends('layouts.admin')
@section('content')
        
<div class="crumb_warp">
    
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Article Management
</div>


<form action="#" method="post">
    <div class="result_wrap">
        
        <div class="result_title">
            <h3>Article List</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
            <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>Add Article</a>
            <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>Article List</a>
            </div>
        </div>
        
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc">ID</th>
                    <th>Title</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Publish</th>
                    <th>Controll</th>
                </tr>
                @foreach($data as $v)
                <tr>
                    <td class="tc">{{$v->art_id}}</td>
                    <td>
                        <a href="#">{{$v->art_title}}</a>
                    </td>
                    <td>{{$v->art_view}}</td>
                    <td>{{$v->art_editor}}</td>
                    <td>{{date('Y-m-d',$v->art_time)}}</td>
                    <td>
                        <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">Edit</a>
                        <a href="javascript:;" onclick="delArt({{$v->art_id}})">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="page_list">
                {{$data->links()}}
            </div>
        </div>
    </div>
</form>


<style>
    .result_content ul li span {
        font-size: 15px;
        padding: 6px 12px;
    }
</style>

<script>
    
    function delArt(art_id) {
        layer.confirm('Are you sure the article will be deleted？', {
            btn: ['Yes','No']
        }, function(){
            $.post("{{url('admin/article/')}}/"+art_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status==0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
//            layer.msg('的确很重要', {icon: 1});
        }, function(){

        });
    }
</script>

@endsection
