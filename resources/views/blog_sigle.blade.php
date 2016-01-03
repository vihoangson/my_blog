@extends("layouts/layout_single_blog")
@section('detail_page')
	<h2>{{$rs->blog_title}}</h2>
	<div>{!! $rs->blog_content !!}</div>
@stop