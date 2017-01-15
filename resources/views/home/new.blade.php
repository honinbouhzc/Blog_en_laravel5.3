@extends('layouts.home')
@section('info')
<title>{{$field->art_title}}--{{Config::get('web.web_title')}}</title>
<meta name="keywords" content="{{$field->art_tag}}" />
<meta name="description" content="{{$field->art_description}}" />
@endsection
@section('content')
 <article class="blogs">
        <h1 class="t_nav"><span>Page：<a href="{{url('/')}}">Index</a>&nbsp;&gt;&nbsp;<a href="{{url('cate/'.$field->cate_id)}}">{{$field->cate_name}}</a></span><a href="{{url('/')}}" class="n1">Home page</a><a href="{{url('cate/'.$field->cate_id)}}" class="n2">{{$field->cate_name}}</a></h1>
        <div class="index_about">
            <h2 class="c_titile">{{$field->art_title}}</h2>
            <p class="box_c"><span class="d_time">Publish：{{date('Y-m-d',$field->art_time)}}</span><span>Edit：{{$field->art_editor}}</span><span>View：{{$field->art_view}}</span></p>
            <ul class="infos">
                {!! $field->art_content !!}
            </ul>
            <div class="keybq">
                <p><span>Keywords</span>：{{$field->art_tag}}</p>
            </div>
            <div class="ad"> </div>
            <div class="nextinfo">
                <p>Previous：
                    @if($article['pre'])
                        <a href="{{url('a/'.$article['pre']->art_id)}}">{{$article['pre']->art_title}}</a>
                    @else
                        <span>No article</span>
                    @endif
                </p>
                <p>Next：
                    @if($article['next'])
                        <a href="{{url('a/'.$article['next']->art_id)}}">{{$article['next']->art_title}}</a>
                    @else
                        <span>No article</span>
                    @endif
                </p>
            </div>
            <div class="otherlink">
                <h2>Related</h2>
                <ul>
                    @foreach($data as $d)
                    <li><a href="{{url('a/'.$d->art_id)}}" title="{{$d->art_title}}">{{$d->art_title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <aside class="right">
            <!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
            </script>
            <!-- Baidu Button END -->
            <div class="blank"></div>
            <div class="news">
                @parent
            </div>
        </aside>
    </article>
@endsection