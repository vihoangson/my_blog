						<!-- SECTION 4 - BLOG / NEWS -->
						<section class="no-display">
							<div class="item blog" id="4">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3>Blog</h3>
										</div>
										<div class="col-md-7">
											<div class="np-main">
												<p>Go to next/previous page</p>
												<div class="np-controls">
													<a href="#" class="previous"><i class="fa fa-arrow-circle-left"></i></a>
													<a href="#" class="next"><i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="blog-wrap">
								<div class="breadcrumb_btn">
									@if(count($rs_p)>1)
										@for($i=1;$i<=count($rs_p);$i++)
											<div data-id="{{$i}}">{{$i}}</div>
										@endfor
									@endif
								</div>
								<div class="clearfix"></div>
								@if (isset($rs_p))
									<div class="slide_out">
										@foreach($rs_p as $key => $value)
											<div class="sl{{$key}}" data-id ="{{$key}}">
											@foreach($value as $key2 => $value2)
												@include("widgets.ele_blog",["value"=>$value2])
											@endforeach
											</div>
										@endforeach
									</div>
								@endif
								</div>
							</div>
						</section>
						<!-- SECTION 4 - BLOG / NEWS -->
						<style>
							.breadcrumb_btn >div {
								display: inline-block;
								background: #FFD42D;
								padding: 10px;
								color: black;
								margin: 0px;
								font-weight: bold;
								cursor: pointer;
							}
							.breadcrumb_btn {
								float: right;
								margin-bottom:10px;
							}
							.breadcrumb_btn .hover {
								background: rgb(253, 229, 138);
							}
						</style>
						<script>
							$(document).ready(function() {

								set_entry_blog();

								$(".breadcrumb_btn div").click(function(){
									localStorage["id_c"] = $(this).text();
									set_entry_blog();
								});

								function set_entry_blog(){
									if(localStorage["id_c"]){
										$(".slide_out > div").fadeOut(100).delay(200);
										$(".slide_out > div.sl"+localStorage["id_c"]).fadeIn(100);
										$(".breadcrumb_btn > div").removeClass('hover');
										$(".breadcrumb_btn > div[data-id='"+localStorage["id_c"]+"']").addClass('hover');
									}
								}
							});
						</script>
