@extends('layouts.admin')
@section('content')
        
<div class="crumb_warp">
    
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Article Management
</div>

    <form action="#" method="post">
        <div class="result_wrap">
            
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-plus"></i>Add</a>
                    <a href="#"><i class="fa fa-recycle"></i>Delete</a>
                    <a href="#"><i class="fa fa-refresh"></i>Order</a>
                </div>
            </div>
            
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <!-- <th class="tc" width="5%"><input type="checkbox" name=""></th> -->
                       <th class="tc" width="5%">Order</th>
                    <th class="tc" width="5%">ID</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>View</th>
                    <th>Controll</th>
                    </tr>

                   @foreach($data as $v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrder(this,{{$v->cate_id}})" value="{{$v->cate_order}}">
                    </td>
                    <td class="tc">{{$v->cate_id}}</td>
                    <td>
                        <a href="#">{{$v->_cate_name}}</a>
                    </td>
                    <td>{{$v->cate_title}}</td>
                    <td>{{$v->cate_view}}</td>
                    <td>
                        <a href="{{url('admin/category/'.$v->cate_id.'/edit')}}">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
                </table>


                <div class="page_list">
                    <ul>
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>

<script>
  function changeOrder(obj,cate_id){
        var cate_order = $(obj).val();
        $.post("{{url('admin/cate/changeorder')}}",{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function(data){
            if(data.status == 0){
                layer.msg(data.msg, {icon: 6});
            }else{
                layer.msg(data.msg, {icon: 5});
            }
        });
    }
</script>

@endsection