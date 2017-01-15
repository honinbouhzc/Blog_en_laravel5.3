@extends('layouts.admin')
@section('content')
   
<div class="crumb_warp">
   
    <i class="fa fa-home"></i> <a href="{{url('admin/index')}}">Home Page</a> &raquo; Change Password
</div>

<div class="result_wrap">
    <div class="result_title">
        <h3>Change Password</h3>
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
</div>

<div class="result_wrap">
    <form method="post" action="">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>Original：</th>
                <td>
                    <input type="password" name="password_o"> </i>Please enter old password</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>New Password：</th>
                <td>
                    <input type="password" name="password"> </i>need 6 to 20 charactors</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>Comfirmation：</th>
                <td>
                    <input type="password" name="password_confirmation"> </i>Enter new password again</span>
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