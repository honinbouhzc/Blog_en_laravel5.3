@extends('layouts.admin')
@section('content')
        
<div class="crumb_warp">
    
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Article Management
</div>

	
	<div class="result_wrap">
        <div class="result_title">
            <h3>Controll</h3>
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
                <a href="#"><i class="fa fa-plus"></i>Add Article</a>
                <a href="#"><i class="fa fa-recycle"></i>Delete</a>
                <a href="#"><i class="fa fa-refresh"></i>Ordered</a>
            </div>
        </div>
    </div>
    
    
    <div class="result_wrap">
        <form action="{{url('admin/category')}}" method="post">
        {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>Category：</th>
                        <td>
                            <select name="cate_pid">
                                <option value="0">==Category==</option>
                               @foreach($data as $d)
                                <option value="{{$d->cate_id}}">{{$d->cate_name}}</option>
                                @endforeach 
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <th><i class="require">*</i>Category Name：</th>
                             <td>
                             <input type="text" name="cate_name">
                             <span><i class="fa fa-exclamation-circle yellow"></i>Category Name must be filled</span>
                            </td>
                     </tr>
                <tr>
                <th>Title：</th>
                    <td>
                        <input type="text" class="lg" name="cate_title">
                    </td>
                 </tr>
                <tr>
                    <th>Key Word：</th>
                    <td>
                        <textarea name="cate_keywords"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Description：</th>
                    <td>
                        <textarea name="cate_description"></textarea>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>Order：</th>
                    <td>
                        <input type="text" class="sm" name="cate_order">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="button" class="back" onclick="history.go(-1)" value="Return">
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>

@endsection