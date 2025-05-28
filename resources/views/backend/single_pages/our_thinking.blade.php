@extends('adminlte::page')


@section('title', 'Our Thinking')

@include('layouts.backend.notifications')

@section('content')

<section class="content">

  <form method="post" action="{{ route('our_thinking_update') }}" enctype="multipart/form-data" accept-charset="utf-8">
    @csrf
    <input type="hidden" name="locale" value="en">
  <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Our Thinking {{-- $our_thinking[0]->locale --}}
                </h3>
              </div>
              <div class="card-body">

                    <div class="form-group">
                      <label>Banner Title:</label>
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                        </span>
                      </div>
                      <input type="text" name="our_thinking_banner_title" class="form-control" value="{{ $our_thinking[0]->our_thinking_banner_title }}" placeholder="Page Title">
                    </div><!-- /.input group -->                       
                    </div>

                    <div class="form-group">
                      <label>Banner Short Description:</label>
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-fw fa-keyboard-o faa-wrench animated faa-slow"></i>
                        </span>
                      </div>
                      <textarea class="form-control" rows="3" name="our_thinking_banner_desc" placeholder="{{ $our_thinking[0]->our_thinking_banner_desc }}">{{ $our_thinking[0]->our_thinking_banner_desc }}</textarea>
                    </div><!-- /.input group -->                      
                    </div>

                    <div class="form-group">
                      <label>Bnner:</label>
                      <div class="input-group">
                        <input type="file" name="our_thinking_banner_image">
                      </div><!-- /.input group -->
                      <div class="input-group">
                        <img src="{{ $our_thinking[0]->our_thinking_banner_image }}">
                      </div><!-- /.input group -->                  
                    </div>


                <div class="row">
                  <div class="col-12 col-md-12">
                    <?php // {{ $blog->bericht }} try {!! $blog->bericht !!} {!! $our_thinking[0]->our_thinking_editor !!} ?>
                    <textarea id="ckeditor" name="our_thinking_editor">{{ $our_thinking[0]->our_thinking_editor }}</textarea>

                  </div>
                  
                </div><br>
                <div class="row">
                  <input type="button" id="save_our_thinking" name="" class="btn btn-success btn-flat" value="Save">
                </div>
                
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
      </form>
    </section>
    <?php /* @include('cookieConsent::index') */ ?>

    <?php //echo $footer; ?>

          <!-- <footer class="main-footer" style="margin: 0px">
            <div class="float-right d-none d-sm-block">
              <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#" target="_blank"> Company Name</a>.</strong> All rights reserved.
          </footer> -->
@stop

@include('layouts.backend.footer')

@section('css')
@stop

@section('js')
@stop