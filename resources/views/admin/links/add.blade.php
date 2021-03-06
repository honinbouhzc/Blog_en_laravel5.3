@extends('layouts.admin')
@section('content')
    
<div class="crumb_warp">
   
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Links Management
</div>


<div class="result_wrap">
    <div class="result_title">
        <h3>Add Link</h3>
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
            <a href="{{url('admin/links/create')}}"><i class="fa fa-plus"></i>Add Link</a>
            <a href="{{url('admin/links')}}"><i class="fa fa-recycle"></i>Link List</a>
        </div>
    </div>
</div>

<div class="result_wrap">
    <form action="{{url('admin/links')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require">*</i>Link Name：</th>
                <td>
                    <input type="text" name="link_name">
                    <span><i class="fa fa-exclamation-circle yellow"></i>Link name must be filled</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i> Url：</th>
                <td>
                    <input type="text" class="lg" name="link_url" value="http://">
                </td>
            </tr>
            <tr>
                <th>Title：</th>
                <td>
                    <input type="text" class="lg" name="link_title">
                </td>
            </tr>
            <tr>
                <th>Order：</th>
                <td>
                    <input type="text" class="sm" name="link_order" value="0">
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
