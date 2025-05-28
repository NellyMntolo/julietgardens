<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.headers.top_header')
		<title>{{ $gallery[0]->page_title }}</title>
		<meta name="keywords" content="{{ $gallery[0]->page_keywords }}" />
		<meta name="description" content="{{ $gallery[0]->page_description }}" />
</head>
<body class="keep-clean">
	<div class="banner1" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ $gallery->page_image }}') no-repeat 0px 0px;">
		<div class="container">
			
			@include('layouts.frontend.headers.other_menu')

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
	<div class="welcome">
		<div class="container">
			<h3 class="masiko_lays_head">{{ $gallery[0]->content_header_title }}</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">{{ $gallery[0]->content_header_description }}</p>
			<div class="lays_gallery_grids">
				<?php 
					foreach ($galleries as $gallery) {
						// code...
						echo '<div class="col-md-4 lays_gallery_grid">
								<a href="{{ $gallery->image }}" class="lsb-preview" data-lsb-group="header">
									<div class="lays_news_grid">
										<img src="{{ $gallery->image }}" alt=" " class="img-responsive">
										<div class="lays_news_grid_pos">
											<div class="wthree_text"><h3>{{ $gallery->image_title }}</h3></div>
										</div>
									</div>
								</a>
							</div>';
					}


				?>
				
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/2.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/5.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/6.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/6.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/1.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/17.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/17.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/18.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/18.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/19.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/19.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/20.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/20.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>plantation</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/cayenne_pepper.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/cayenne_pepper.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>Cayenne Peppers</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/ginger.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/ginger.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>Ginger</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/tomatoes.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/tomatoes.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>Tomatoes</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 lays_gallery_grid">
					<a href="/images/frontend/garlic.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="lays_news_grid">
							<img src="/images/frontend/garlic.jpg" alt=" " class="img-responsive">
							<div class="lays_news_grid_pos">
								<div class="wthree_text"><h3>Garlic</h3></div>
							</div>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@include('layouts.frontend.footers.footer')
<script type="text/javascript" src="/js/frontend/lsb.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
		$.fn.lightspeedBox();
});
</script>
</body>
</html>