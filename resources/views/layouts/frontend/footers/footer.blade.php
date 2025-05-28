<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<div class="footer appear-down">
  <div class="container">
    <div class="w3agile_footer_grids">
      <div class="col-md-3 agileinfo_footer_grid">
        <div class="masiko_lays_footer_logo">
          <h2><a href="/"><span>J</span>uliet Gardens<i>Grow healthy products</i></a></h2>
        </div>
      </div>
      <div class="col-md-3 agileinfo_footer_grid agileinfo_footer_grid1">
        <h3>Navigation</h3>
        <ul class="lays_footer_nav">
          <li><a href="/"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
          <li><a href="{{-- route('about') --}}/About"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About Us</a></li>
          <li><a href="{{-- route('services') --}}/Services"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Services</a></li>
          <li><a href="{{-- route('gallery') --}}/Gallery"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Gallery</a></li>
          <li><a href="{{-- route('contact') --}}/Contact"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 agileinfo_footer_grid agileinfo_footer_grid1">
        <h3>Usage</h3>
        <ul class="lays_footer_nav">
          <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms & Conditions</a></li>
          <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy</a></li>
          <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Testimonials</a></li>
        </ul>
      </div>
      <div class="col-md-3 agileinfo_footer_grid">
        <h3>Contact Info</h3>
        <h4>Call Us <span>+268 7988 7100</span></h4>
        <p>My Company, 875 Gwamile Street <span>8907 Eswatini.</span></p>
        <ul class="masiko_social_list">
          <li><a href="#" class="masiko_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class="masiko_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
          <li><a href="#" class="masiko_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
          <li><a href="#" class="masiko_share"><i class="fa fa-share share" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="col-md-3 agileinfo_footer_grid">
        <div class="agileinfo_footer_grid_left">
        </div>
      </div>

      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="w3_masiko_footer_copy">
    <div class="container">
      <strong>Copyright &copy; {{ date('Y') }} <a href="/" class="company_name"> Juliet Gardens</a>.</strong>&nbsp;All rights reserved.
  </div>
</div>
<script type="text/javascript" src="/js/frontend/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/js/frontend/bootstrap.js"></script>
<script type="text/javascript" src="/js/frontend/animsition.js"></script>
<script type="text/javascript" src="/js/frontend/move-top.js"></script>
<script type="text/javascript" src="/js/frontend/easing.js"></script>
<script type="text/javascript" src="/js/frontend/custom.js"></script>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lf4tQwmAAAAALHPqBzIfzRgJfS-HogNVRSLOVhz"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Lf4tQwmAAAAALHPqBzIfzRgJfS-HogNVRSLOVhz', {action: 'login'}).then(function(token) {
       // ...
    });
});
</script>
<script>
var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "PAGE-ID");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
      // version          : 'API-VERSION'
    });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>