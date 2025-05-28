<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.headers.top_header')
	<title>{{ $contact[0]->page_title }}</title>
	<meta name="keywords" content="{{ $contact[0]->page_keywords }}" />
	<meta name="description" content="{{ $contact[0]->page_description }}" />
</head>
<body class="keep-clean">
	<div class="banner1" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{$contact[0]->page_image}}') no-repeat 0px 0px;">
		<div class="container">
			@include('layouts.frontend.headers.other_menu')
			<!-- <h6>{{-- $contact[0]->header_title --}}</h6> -->
			<!-- <p>{{-- $contact[0]->header_description --}}</p> -->
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
			<h3 class="masiko_lays_head">{{ $contact[0]->content_header_title }}</h3>
			<div class="masiko_image">
				<img src="/images/frontend/1.png" alt=" " class="img-responsive" />
			</div>
			<p class="agile_para">{{ $contact[0]->content_header_description }}</p>
			<div class="w3ls_news_grids">
				<div class="col-md-8 masiko_mail_left">
					<div class="masiko_mail_grid_right1 agile_mail_grid_right1">
						<form action="submited" method="post" accept-charset="utf-8" action="#">
							@csrf
							<span>
								<i>Name</i>
								<div class="textfield-outlined">
								    <input type="text" required name="uname" id="input-one" type="text" placeholder=" ">
								    <label for="input-one">Name</label>
								</div>
							</span>
							<span>
								<i>Email</i>
								<div class="textfield-outlined">
								    <input type="email" required name="uemail" id="input-two" type="text" placeholder=" ">
								    <label for="input-two">Email</label>
								</div>
							</span>
							<span>
								<i>Subject</i>
								<div class="textfield-outlined">
								    <input type="text" required name="usubject" id="input-three" type="text" placeholder=" ">
								    <label for="input-three">Subject</label>
								</div>
							</span>
							<span>
								<i>Message</i>
								<div class="textfield-outlined">
								    <textarea name="umessage" required id="input-four" cols="3" rows="1" placeholder=" "></textarea>
								    <label for="input-four">Message</label>
								</div>
							</span>
							<div class="w3_submit">
								<input type="submit" value="Submit Now">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4 masiko_mail_right">
					<div class="w3_masiko_mail_right_grid">
						<h4>About Plantation</h4>
						<p>Donec libero lectus, feugiat vel elit nec, mattis tempor mi ante.</p>
						<h5>Follow Us On</h5>
						<ul class="masiko_social_list">
							<li><a href="#" class="masiko_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="masiko_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="masiko_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
						<div class="w3_masiko_mail_right_grid_pos">
							<img src="{{ $contact[0]->ceo_image }}" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="w3_masiko_mail_right_grid_main">
						<div class="lays_mail_grid_left">
							<div class="lays_mail_grid_left1 hvr-radial-out">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="lays_mail_grid_left2">
								<h3>Mail Us</h3>
								<a href="mailto:info@example.com">info@example.com</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="lays_mail_grid_left">
							<div class="lays_mail_grid_left1 hvr-radial-out">
								<span class="fa fa-home" aria-hidden="true"></span>
							</div>
							<div class="lays_mail_grid_left2">
								<h3>Address</h3>
								<p>My Company 8907 Eswatini.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="lays_mail_grid_left">
							<div class="lays_mail_grid_left1 hvr-radial-out">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="lays_mail_grid_left2">
								<h3>Phone</h3>
								<p>+(0121) 121 121</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div id="map"></div>
@include('layouts.frontend.footers.footer')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js">
	// API KEY
	// Close Add Block
</script> 
<script type="text/javascript">
// When the window has finished loading create our google map below
// 20211021 removed
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        // zoom: 16,
        zoom: 13,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        draggable: true,

        // The latitude and longitude to center the map (always required)
        //center: new google.maps.LatLng(25.027187, 121.531287), // New York
        // center: new google.maps.LatLng(-26.3112326, 31.135048),
        center: new google.maps.LatLng({{ $contact[0]->contact_map_lat }}, {{ $contact[0]->contact_map_long }}),

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"all","elementType":"all","stylers":[{"color":"#a4dd25"},{"gamma":"2"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"color":"#4c4e56"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#4c4e56"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#cacac8"},{"lightness":20},{"gamma":"2"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#cacac8"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#cacac8"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#cacac8"},{"lightness":17},{"gamma":"3.00"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":"1.00"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18},{"visibility":"on"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#cacac8"},{"gamma":"3.00"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(26.471700, 31.4428267),
        map: map,
        title: 'Snazzy!'
    });
}
</script>
</body>
</html>