<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.headers.top_header')
		<title>{{ $services[0]->page_title }}</title>
		<meta name="keywords" content="{{ $services[0]->page_keywords }}" />
		<meta name="description" content="{{ $services[0]->page_description }}" />
</head>
<body class="keep-clean">
	<div class="banner1" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ $services[0]->page_image }}') no-repeat 0px 0px;">
		<div class="container">			
			@include('layouts.frontend.headers.other_menu')
			<h6>{{-- $services[0]->header_title --}}</h6>
			<p>{{-- $services[0]->header_description --}}</p>
		</div>
		<div class="wave-wrapp">
            <svg class="wave" xmlns="http://www.w3.org/2000/svg"  viewBox="0 24 150 28"   preserveAspectRatio="none">
                <defs>
                    <path id="gentle-wave" d="m -160,44.4 c 30,0 58,-18 87.7,-18 30.3,0 58.3,18 87.3,18 30,0 58,-18 88,-18 30,0 58,18 88,18 l 0,34.5 -351,0 z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="50" y="0" fill="rgba(255, 255, 255, 0.48)"/>
                    <use xlink:href="#gentle-wave" x="50" y="3" fill="rgba(255, 255, 255, 0.78)"/>
                    <use xlink:href="#gentle-wave" x="50" y="6" fill="rgba(255, 255, 255, 0.8)"/>  
                </g>
            </svg>
        </div>
	</div>
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Ntsiko_test
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="/images/frontend/4.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="welcome">
		<div class="container">
			<h3 class="masiko_lays_head">Our <span>Featured</span> Services</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="masiko_services_grids"> 
				<div class="col-md-6 masiko_services_grid"> 
					<div class="col-xs-4 masiko_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="/images/frontend/13.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 masiko_services_grid_right"> 
						<h4>Ut et turpis interdum</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 masiko_services_grid"> 
					<div class="col-xs-4 masiko_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="/images/frontend/14.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 masiko_services_grid_right"> 
						<h4>Vivamus vitae euismod</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 masiko_services_grid"> 
					<div class="col-xs-4 masiko_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="/images/frontend/15.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 masiko_services_grid_right"> 
						<h4>blandit rutrum et erat</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 masiko_services_grid"> 
					<div class="col-xs-4 masiko_services_grid_left"> 
						<div class="agile_services_grid_left1 hvr-radial-out"> 
							<img src="/images/frontend/16.png" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="col-xs-8 masiko_services_grid_right"> 
						<h4>felis leo sodales lacus</h4>
						<p>Fusce eget nisi ac tellus dapibus eleifend in in erat. Vestibulum eu leo quis 
							diam blandit rutrum et eu dui. Vivamus vitae euismod diam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="services-bottom">
		<div class="container">
			<h3 class="masiko_lays_head agileinfo_head w3_head">What <span>we</span> do</h3>
			<div class="masiko_image">
				<img src="/images/frontend/17.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para masiko_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids">
				<div class="col-md-4 w3_masiko_services_bottom_grid masiko_hover">
					<div class="wthree_services_bottom_grid1">
						<img src="/images/frontend/5.jpg" alt=" " class="img-responsive" />
						<div class="wthree_services_bottom_grid1_pos">
							<h4>Fertilizing</h4>
						</div>
					</div>
					<div class="agileinfo_services_bottom_grid2">
						<p>Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.</p>
						<div class="masiko_lays_learn_more hvr-radial-out">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_masiko_services_bottom_grid">
					<div class="wthree_services_bottom_grid1">
						<img src="/images/frontend/6.jpg" alt=" " class="img-responsive" />
						<div class="wthree_services_bottom_grid1_pos">
							<h4>Soil Testing</h4>
						</div>
					</div>
					<div class="agileinfo_services_bottom_grid2">
						<p>Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.</p>
						<div class="masiko_lays_learn_more hvr-radial-out">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_masiko_services_bottom_grid">
					<div class="wthree_services_bottom_grid1">
						<img src="/images/frontend/3.jpg" alt=" " class="img-responsive" />
						<div class="wthree_services_bottom_grid1_pos">
							<h4>Planting</h4>
						</div>
					</div>
					<div class="agileinfo_services_bottom_grid2">
						<p>Quisque faucibus scelerisque eros, molestie tristique lacus posuere in.</p>
						<div class="masiko_lays_learn_more hvr-radial-out">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="testimonials">
		<div class="container">
			<h3 class="masiko_lays_head">Our <span>Testimonials</span></h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para">Morbi viverra lacus commodo felis semper, eu iaculis lectus nulla at sapien blandit sollicitudin.</p>
			<div class="w3ls_news_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="/images/frontend/15.jpg" alt=" " class="img-responsive" />
										<!-- <img src="{{-- $services_testimonials[0]->service_testimonials_image --}}" alt=" " class="img-responsive" /> -->
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>Vivamus malesuada <span>pellentesque</span> nunc id <i>'condim'</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
											placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
											tristique enim.</p>
										<h6>:- Laura More <span>Customer</span></h6>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="/images/frontend/14.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>Quisque eu aliquam <span>dignissim</span> ex a <i>'fringilla'</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
											placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
											tristique enim.</p>
										<h6>:- Henry Paul <span>Customer</span></h6>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="agile_testimonials_grid">
									<div class="col-md-4 agile_testimonials_grid_left">
										<img src="/images/frontend/16.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-8 agile_testimonials_grid_right">
										<h5>Vivamus malesuada <span>pellentesque</span> nunc id <i>'condim'</i></h5>
										<div class="wthree_stars">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<p>Duis porttitor magna leo, ac feugiat nibh bibendum at. Duis porttitor 
											placerat ex a fermentum. Praesent et dolor dignissim, fringilla enim vitae, 
											tristique enim.</p>
										<h6>:- Andria Carl <span>Customer</span></h6>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
@include('layouts.frontend.footers.footer')
<script type="text/javascript" defer src="/js/frontend/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	});
});
</script>
</body>
</html>