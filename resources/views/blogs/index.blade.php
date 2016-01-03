@extends("layouts/layout_admin")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li class="active">Blog</li></ol>')
@section("detail_page")
    <p><a href='/blogs/create' class='btn btn-primary'><i class="fa fa-pencil"></i> Thêm bài viết</a></p>
    @foreach($rs as $key => $value)
        <p>{{$value->blog_title}}</p>
        <a href="/blogs/{{$value->id}}/edit">Edit</a>
        <a href="/blogs/{{$value->id}}/view">View</a>
        <a href="/blogs/delete/{{$value->id}}">Delete</a>
    @endforeach
@stop

