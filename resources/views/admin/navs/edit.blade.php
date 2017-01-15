@extends('layouts.admin')
@section('content')
       
<div class="crumb_warp">
    
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Navigator Management
</div>

<div class="result_wrap">
    <div class="result_title">
        <h3>Edit Nav</h3>
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
            <a href="{{url('admin/navs/create')}}"><i class="fa fa-plus"></i>Add Nav</a>
            <a href="{{url('admin/navs')}}"><i class="fa fa-recycle"></i>Nav List</a>
        </div>
    </div>
</div>

<div class="result_wrap">
    <form action="{{url('admin/navs/'.$field->nav_id)}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require">*</i>Nav Name：</th>
                <td>
                    <input type="text" name="nav_name" value="{{$field->nav_name}}">
                    <input type="text" name="nav_alias" class="sm" value="{{$field->nav_alias}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>Nav name must be filled</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i> Url：</th>
                <td>
                    <input type="text" class="lg" name="nav_url" value="{{$field->nav_url}}">
                </td>
            </tr>
            <tr>
                <th>Order:</th>
                <td>
                    <input type="text" class="sm" name="nav_order" value="{{$field->nav_order}}">
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
