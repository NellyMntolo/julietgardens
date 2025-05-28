@section('content_top_nav_right')
<li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php //echo $lang_result; ?> <i class="fas fa-globe"></i> English <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <?php //echo $active_language; ?>
    <li><a href="#" class="dropdown-item"><i class="fas fa-language mr-2"></i>English</a></li>
    <li><a href="#" class="dropdown-item"><i class="fas fa-language mr-2"></i>English</a></li>
    <li><a href="#" class="dropdown-item"><i class="fas fa-language mr-2"></i>English</a></li>
  </ul>
</li>
    
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge">15</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
      <span class="dropdown-item dropdown-header">15 Notifications</span>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</li>
@endsection

@section('content_header')

<!-- <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->

<link href='/public/fonts/backend/NixieOne-Regular.ttf' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="{{ asset('favicons/backend/favicon.ico') }}"/>
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/backend/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/backend/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/backend/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/backend/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/backend/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/backend/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/backend/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/backend/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/backend/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/backend/favicon-16x16.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/backend/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/backend/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/backend/android-icon-192x192.png') }}">
<link rel="manifest" href="{{ asset('favicons/backend/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('favicons/backend/ms-icon-144x144.png') }}">


    <!-- <h1>Dashboard</h1> <span>ttt.com</span> -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <?php 

                  // $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  // $last = explode("/", $str, 3);

                  // // print_r($last);

                  // if ($last != 2 ){
                  //   //echo ucwords($last[1]);
                  // } else {
                  //   echo ucwords($last[2]);
                  // } 
                  
            ?>
            <!-- Dashboard --></h1> <!-- <span>ttt.com</span> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li> -->
              <li class="breadcrumb-item"><a href="/home">Home</a></li>

              <?php 
                  // $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  // $last = explode("/", $str, 3);
                  // echo $last[2];
                  $link = ""; 
              ?>
              @for($i = 1; $i <= count(Request::segments()); $i++)
                  @if($i < count(Request::segments()) & $i > 0)
                  <?php $link .= "/" . "" . "/" . Request::segment($i); ?>
                  {{-- <li  class="breadcrumb-item active"><a href="<?= $link; ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a></li>  >  --}}
                  @else <li  class="breadcrumb-item active">{{ucwords(str_replace('-',' ',Request::segment($i)))}}</li>
                  @endif
              @endfor

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
          
{{-- $link = "";
@for($i = 1; $i <= count(Request::segments()); $i++)
    @if($i < count(Request::segments()) & $i > 0)
    <?php $link .= "/" . Request::segment($i); ?>
    <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a> >
    @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
    @endif
@endfor --}}


<?php
    // $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // $last = explode("/", $str, 3);
    // echo $last[2];
?>

@stop