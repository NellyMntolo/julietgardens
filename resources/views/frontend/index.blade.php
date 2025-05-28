<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.headers.top_header') 
	<title>{{ $index[0]->page_title }}</title>
	<meta name="keywords" content="{{ $index[0]->page_keywords }}" />
	<meta name="description" content="{{ $index[0]->page_description }}" />
</head>
<body id="scroll-container" class="keep-clean">
	<div class="banner appear-down" style="background: url('{{ $index[0]->page_image }}') no-repeat 0px 0px;">
		<div class="container">
			@include('layouts.frontend.headers.index_menu')
			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h3 class="title_X">{{ $index[0]->header_title }}</h3>
					<p>{{ $index[0]->header_description }}</p>
					<ul>
						<li><a href="{{route('contact') }}" class="w3l_contact">{{ $index[0]->button_one }}</a></li>
						<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">{{ $index[0]->button_two }}</a></li>
					</ul>
				</div>
			</div>
			<div class="thim-click-to-bottom">
				<a href="#banner-bottom" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
		</div>
		<div class="cd-bg-video-wrapper" data-video="assets/video">
			<!-- video element will be loaded using jQuery -->
		</div>
	</div>
	<div class="banner-bottom" id="banner-bottom">
		<div class="col-md-4 masiko_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_masiko_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-pagelines" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>{{ $index[0]->mini_header_one_title }}</h4>
						<p>{{ $index[0]->mini_header_one_description }}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 masiko_banner_bottom_left1">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_masiko_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>{{ $index[0]->mini_header_two_title }}</h4>
						<p>{{ $index[0]->mini_header_two_description }}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 masiko_banner_bottom_left2">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_masiko_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-yelp" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>{{ $index[0]->mini_header_three_title }}</h4>
						<p>{{ $index[0]->mini_header_three_description }}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="welcome appear-down">
		<div class="container">
			<h3 class="masiko_lays_head">{{ $index[0]->section_one_title }}</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">{{ $index[0]->section_one_description }}</p>
		</div>

		<div class="mis-stage w3_masiko_welcome_grids">
			<ol class="mis-slider">
				<?php 
					foreach ($index_sliders as $slider) {
						// code...
						echo '<li class="mis-slide"> 
									<figure> 
										<img src="'.$slider->slider_image.'" alt=" " class="img-responsive" />
										<figcaption>'.$slider->slider_title.'</figcaption>
									</figure>
								</li>';
					}
				?>
			</ol>
		</div>
	</div>
	<div id="welcome_bottom" class="welcome-bottom appear-down">
		<div class="col-md-6 wthree_welcome_bottom_left">
			<h3>{{ $index[0]->section_two_title_one }}</h3>
			<p>{{ $index[0]->section_two_description_one }}</p>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="/images/frontend/8.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">23,536</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="/images/frontend/9.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">53,234</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="/images/frontend/10.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">43,568</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="col-md-6 wthree_welcome_bottom_left_grid">
				<div class="w3l_social_icon_gridl">
					<img src="/images/frontend/11.png" alt=" " class="img-responsive" />
				</div>
				<div class="w3l_social_icon_gridr">
					<h4 class="counter">12,432</h4>
				</div>
				<div class="clearfix"> </div>
				<div class="w3l_social_icon_grid_pos">
					<label>-</label>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure class="masiko_effect_moses">
					<img src="{{ $index[0]->section_two_image_two }}" alt=" " class="img-responsive" />
					<figcaption>
						<h4>{{ $index[0]->section_two_title_two }}</h4>
						<p>{{ $index[0]->section_two_description_two }}</p>
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="welcome appear-down">
		<div class="container">
			<h3 class="masiko_lays_head">{{ $index[0]->section_three_title }}</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para">{{ $index[0]->section_three_description }}</p>
			<div class="w3ls_news_grids">
				<?php 
					foreach ($index_news as $news) {
						// code...
						echo '<div class="col-md-4 w3ls_news_grid masiko_hover">
					<div class="lays_news_grid">
						<img src="'.$news->news_image.'" alt=" " class="img-responsive" />
						<div class="lays_news_grid_pos">
							<div class="wthree_text"><h3>'.$news->news_image_title.'</h3></div>
						</div>
					</div>
					<div class="masiko_lays_news_grid">
						<ul>
							<li><i class="fa fa-calendar" aria-hidden="true"></i>'.date_format($news->created_at,"M d Y").'</li>
							<!--<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>-->
						</ul>
						<h4><a href="#" data-toggle="modal" data-target="#news'.$news->id.'">'.$news->news_content_title.'</a></h4>
						<p>'.$news->news_content.'</p>
					</div>
				</div>';
				echo '<div class="modal video-modal fade" id="news'.$news->id.'" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									'.$news->news_content_title.'
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				
								</div>
								<section>
									<div class="modal-body">
										<img src="'.$news->news_image.'" alt=" " class="img-responsive" />
										<p>'.$news->news_content.'</p>
									</div>
								</section>
							</div>
						</div>
					</div>';
					}
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="newsletter appear-down" style="background:url('{{ $index[0]->section_four_image }}') no-repeat 0px 0px">
		<div class="container">
			<h3 class="masiko_lays_head agileinfo_head">{{ $index[0]->section_four_title }}</h3>
			<div class="masiko_image">
				<img src="/images/frontend/12.png" alt=" " class="img-responsive">
			</div>
			<p class="agile_para masiko_para">{{ $index[0]->section_four_description }}</p>
			<div class="w3ls_news_grids w3ls_newsletter_grids">
				<form action="#" method="post" accept-charset="utf-8" action="#">
					@csrf
					<input name="name" placeholder="{{ $index[0]->section_four_name }}" type="text" required>
					<input name="email" placeholder="{{ $index[0]->section_four_email }}" type="email" required>					
					<input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
@include('layouts.frontend.footers.footer')
<script type="text/javascript" src="/js/frontend/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/js/frontend/jquery.countup.js"></script>
<script type="text/javascript" src="/js/frontend/mislider.js"></script>
<script type="text/javascript" src="/js/frontend/jquery.transit.js"></script> 
<script type="text/javascript" src="/js/frontend/jquery.textFx.js"></script>
<script type="text/javascript">
jQuery(function ($) {
    var slider = $('.mis-stage').miSlider({
        stageHeight: 380,
        slidesOnStage: false,
        slidePosition: 'center',
        slideStart: 'mid',
        slideScaling: 150,
        offsetV: -5,
        centerV: true,
        navButtonsOpacity: 1,
    });
});
$('.title_X').textFx({
	type: 'fadeIn',
	iChar: 100,
	iAnim: 1000
});
$('.counter').countUp();
</script>
</body>
</html>