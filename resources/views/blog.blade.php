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
									<article>
										<div class="row">
											<div class="col-md-5">
												<img src="<?= PATH_THEME; ?>images/blog/2.jpg" class="img-responsive" alt=""/>
											</div>
											<div class="col-md-7">
												<h3><a href="./blog-single.html">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
									<div class="quote-post">
										<div class="row">
											<div class="col-md-12">
												<blockquote>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aene.This is photoshop's version f Lorem Ipsum.</blockquote>
												<i class="fa fa-quote-left"></i>
												<span class="author-name">John Smith</span>
											</div>
										</div>
									</div>
									<article class="no-border">
										<div class="row">
											<div class="col-md-5">
												<img src="<?= PATH_THEME; ?>images/blog/3.jpg" class="img-responsive" alt=""/>
											</div>
											<div class="col-md-7">
												<h3><a href="./blog-single.html">Standard Post with Image</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
											</div>
										</div>
									</article>
								</div>
							</div>
						</section>
						<!-- SECTION 4 - BLOG / NEWS -->