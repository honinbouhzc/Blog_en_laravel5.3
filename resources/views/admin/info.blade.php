@extends('layouts.admin')
@section('content')
	
	<div class="crumb_warp">
		
		<i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home Page</a> &raquo; System Infomation
	</div>
	
	
	<div class="result_wrap">
        <div class="result_title">
            <h3>ontroll</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>Add Article</a>
                <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>Article List</a>
            </div>
        </div>
    </div>

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>System Infomation</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>Operation System</label><span>{{PHP_OS}}</span>
                </li>
                <li>
                    <label>environment</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
               
                
                <li>
                    <label>Attachment Limited</label><span><?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"Can not Upload"; ?></span>
                </li>
                <li>
                    <label>Time</label><span><?php echo date('Y-m-d H:i:s')?></span>
                </li>
              
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>Help</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>Wechat</label><span>Zhichao_Han</span>
                </li> 
                <li>
                    <label>Facebook: </label><span>@honinbouHZC</span>
                </li>
                <li>
                    <label>Location: </label><span>Canterbury,Sydney</span>
                </li>
                <li>
                    <label>Personal Web page：</label><span><a href="http://ericstoreonline.com/teastore/">Tea Store</a></span>
                </li>
            </ul>
        </div>
    </div>

@endsection