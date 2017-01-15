@extends('layouts.admin')
@section('content')
		
<div class="top_box">
	<div class="top_left">
		<div class="logo">Dashboard</div>
		<ul>
			<li><a href="{{url('admin/index')}}" target="_blank" class="active">Home Page</a></li>
			<li><a href="{{url('admin/info')}}" target="main">Infomation</a></li>
		</ul>
	</div>
	<div class="top_right">
		<ul>
			<li>Administrator：admin</li>
			<li><a href="{{url('admin/pass')}}" target="main">Change Password</a></li>
			<li><a href="{{url('admin/quit')}}">Exit</a></li>
		</ul>
	</div>
</div>

<div class="menu_box">
	<ul>
		<li>
			<h3><i class="fa fa-fw fa-clipboard"></i>Management</h3>
			<ul class="sub_menu">
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>Add Category</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>Category List</a></li>
				<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>Add Article</a></li>
				<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>Article List</a></li>
			</ul>
		</li>
		<li>
			<h3><i class="fa fa-fw fa-cog"></i>Configuration</h3>
			<ul class="sub_menu" style="display: block;">
				<li><a href="{{url('admin/links')}}" target="main"><i class="fa fa-fw fa-cubes"></i>Links</a></li>
				<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>Navigators</a></li>
				<li><a href="{{url('admin/config')}}" target="main"><i class="fa fa-fw fa-cogs"></i>Configuration</a></li>
			</ul>
		</li>
	</ul>
</div>

<div class="main_box">
	<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>


<div class="bottom_box">
	CopyRight © 2016. Powered By Eric Han.
</div>


@endsection


