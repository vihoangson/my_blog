@extends("news.layouts.layout_blog_detail")
<?php
$title=$blogs->blog_title;
$image="/uploads/".$blogs->blog_image;
$content_news=$blogs->blog_content;
?>
@section("title_page")
@endsection
@section("content_page")
@endsection
@section("comment_block")
	@if(($comments))
		<div class="col-sm-16 comments-area" id="comment-block">
			<div class="main-title-outer pull-left">
				<div class="main-title">comments</div>
			</div>
			<div class="opinion pull-left">
				@foreach($comments as $comment)
					<div class="media"> <a href="#" class="pull-left"> <img alt="64x64" data-src="{{PATH_THEME_NEWS}}holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="{{PATH_THEME_NEWS}}images/comments/com-1.jpg"> </a>
						<div class="media-body">
							<div>
								<h4 class="media-heading">{{$comment->comment_name}}</h4>
								<div class="time text-danger"><span class="ion-android-data icon"></span>{{$comment->created_at->format('M d,Y \a\t h:i a')}}</div>
							</div>
							{{$comment->comment_content}}
							<div class="col-sm-16"><a href="#"><span class="reply pull-right ion-ios7-compose"></span></a></div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@endif
	{{-- Comment block --}}
@endsection
