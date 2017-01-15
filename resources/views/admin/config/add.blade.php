@extends('layouts.admin')
@section('content')
       
<div class="crumb_warp">
   
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; Configuration
</div>


<div class="result_wrap">
    <div class="result_title">
        <h3>Add</h3>
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
    <form action="{{url('admin/config')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require">*</i>Title：</th>
                <td>
                    <input type="text" name="conf_title">
                    <span><i class="fa fa-exclamation-circle yellow"></i>Configuration title must be filled</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>Name：</th>
                <td>
                    <input type="text" name="conf_name">
                    <span><i class="fa fa-exclamation-circle yellow"></i>Configuration name must ve filled</span>
                </td>
            </tr>
            <tr>
                <th>Form：</th>
                <td>
                    <input type="radio" name="field_type" value="input" checked onclick="showTr()">input　
                    <input type="radio" name="field_type" value="textarea" onclick="showTr()">textarea　
                    <input type="radio" name="field_type" value="radio" onclick="showTr()">radio
                </td>
            </tr>
            <tr class="field_value">
                <th>Value：</th>
                <td>
                    <input type="text" class="lg" name="field_value">
                    <p><i class="fa fa-exclamation-circle yellow"></i>Config it When the value is radio, FOrmat:1|Open,0|Stop</p>
                </td>
            </tr>
            <tr>
                <th>Order：</th>
                <td>
                    <input type="text" class="sm" name="conf_order" value="0">
                </td>
            </tr>
            <tr>
                <th>Description：</th>
                <td>
                    <textarea id="" cols="30" rows="10" name="conf_tips"></textarea>
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
<script>
    showTr();
    function showTr() {
        var type = $('input[name=field_type]:checked').val();
        if(type=='radio'){
            $('.field_value').show();
        }else{
            $('.field_value').hide();
        }
    }
</script>
@endsection
