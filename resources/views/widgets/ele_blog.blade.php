									<article>
										<div class="row">
											<div class="col-md-5">
												<img src="<?= PATH_THEME; ?>images/blog/1.jpg" class="img-responsive" alt=""/>
											</div>
											<div class="col-md-7">
												<h3><a href="./blog-single.html">{{$value->blog_title}}</a></h3>
												<div class="post-meta">
													<i class="fa fa-calendar"></i> <a href="#">30 march</a> 
													<i class="fa fa-user"></i> <a href="#">Admin</a> 
													<i class="fa fa-comments"></i> <a href="#">10 Comments</a> 
												</div>
												{!!$value->blog_content!!} 
											</div>
										</div>
									</article>
									<div class="link-post">
										<div class="row">
											<div class="col-md-12">
												<i class="fa fa-link"></i>
												<a href="http://www.themeforest.net" target="_blank">www.themeforest.net</a>
											</div>
										</div>
									</div>