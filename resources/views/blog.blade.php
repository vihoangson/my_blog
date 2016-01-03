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
								@if (isset($rs))
									@foreach($rs as $key => $value)
										@include("widgets.ele_blog",compact("value"))
									@endforeach
								@endif		
								</div>
							</div>
						</section>
						<!-- SECTION 4 - BLOG / NEWS -->