
<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.headers.top_header')
	<title>{{ $about[0]->page_title }}</title>
	<meta name="keywords" content="{{ $about[0]->page_keywords }}" />
	<meta name="description" content="{{ $about[0]->page_description }}" />
</head>
<body class="keep-clean">
	<div class="banner1" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{$about[0]->page_image}}') no-repeat 0px 0px;">
		<div class="container">
			@include('layouts.frontend.headers.other_menu')
			<h6>{{ $about[0]->header_title }}</h6>
			<p>{{ $about[0]->header_description }}</p>
		</div>
		<div class="wave-wrapp">
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
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
	<div class="welcome">
		<div class="container">
			<h3 class="masiko_lays_head">{{ $about[0]->header_title_two }} Why <span>Choose</span> Us</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">{{ $about[0]->header_description_two }}</p>
			<div class="w3ls_news_grids">
				<div class="col-md-6 masiko_about_grid_left">
					<h3>Pellentesque a ligula nec dui ornare pulvinar in non sem condimentum erat</h3>
					<p>{{ $about[0]->header_description_three }}</p>
				</div>
				<div class="col-md-6 masiko_about_grid_right">
					<div class="skillbar" data-percent="{{ $about[0]->farm_seeds }}">
					  <span class="skillbar-title" style="background: #f1703a;">Seeds</span>
					  <p class="skillbar-bar" style="background: #f88c5e;"></p>
					  <span class="skill-bar-percent"></span>
					</div>					
					<div class="skillbar" data-percent="{{ $about[0]->farm_growth }}">
					  <span class="skillbar-title" style="background: #2980b9;">Growth</span>
					  <p class="skillbar-bar" style="background: #3498db;"></p>
					  <span class="skill-bar-percent"></span>
					</div>					
					<div class="skillbar" data-percent="{{ $about[0]->farm_economy }}">
					  <span class="skillbar-title" style="background: #a0d034;">Economy</span>
					  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
					  <span class="skill-bar-percent"></span>
					</div>					
					<div class="skillbar" data-percent="{{ $about[0]->farm_planting }}">
					  <span class="skillbar-title" style="background: #e7cc2c;">Planting</span>
					  <p class="skillbar-bar" style="background: #f5d410;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="about-bottom" style="background: url(/images/frontend/9.jpg) no-repeat 0px 0px">
		<div class="container">
			<h3>{{ $about[0]->section_quote }}</h3>
		</div>
	</div>
	<div class="welcome">
		<div class="container">
			<h3 class="masiko_lays_head">{{ $about[0]->header_title_four }}</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">{{ $about[0]->header_description_four }}</p>
			<div class="w3ls_news_grids w3_masiko_team_grids">
				<?php
						foreach ($about_team as $team_member) {
						  	// code...
								echo '<div class="col-md-3 w3_masiko_team_grid"> 
													<div class="lays_news_grid">
														<img src="'.$team_member->about_us_team_image.'" alt=" " class="img-responsive" />
														<div class="lays_news_grid_pos">
															<div class="wthree_text agileinfo_about_text">
																<ul class="masiko_social_list">
																	<li><a href="#" class="masiko_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
																	<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
																	<li><a href="#" class="masiko_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<h4>'.$team_member->about_us_team_name.'</h4>
													<p>'.$team_member->about_us_team_title.'</p>
												</div>';
						}  
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@include('layouts.frontend.footers.footer')
<script type="text/javascript" src="/js/frontend/skill.bars.jquery.js"></script>
<script type="text/javascript">
$('.skillbar').skillBars({
	from: 0,
	speed: 4000, 
	interval: 100,
	decimals: 0,
});
</script>
</body>
</html>