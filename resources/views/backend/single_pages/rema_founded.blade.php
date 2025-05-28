@extends('adminlte::page')


@section('title', 'Rema Founded')

@include('layouts.backend.notifications')

@section('content')

<section class="content">

  <form method="post" action="{{ route('rema_founded_update') }}" enctype="multipart/form-data" accept-charset="utf-8">
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
                  Rema Founded {{-- $rema_founded[0]->locale --}}
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
                      <input type="text" name="rema_founded_banner_title" class="form-control" value="{{ $rema_founded[0]->rema_founded_banner_title }}" placeholder="Page Title">
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
                      <textarea class="form-control" rows="3" name="rema_founded_banner_desc" placeholder="{{ $rema_founded[0]->rema_founded_banner_desc }}">{{ $rema_founded[0]->rema_founded_banner_desc }}</textarea>
                    </div><!-- /.input group -->                      
                    </div>

                    <div class="form-group">
                      <label>Bnner:</label>
                      <div class="input-group">
                        <input type="file" name="rema_founded_banner_image">
                      </div><!-- /.input group -->
                      <div class="input-group">
                        <img src="{{ $rema_founded[0]->rema_founded_banner_image }}">
                      </div><!-- /.input group -->                  
                    </div>


                <div class="row">
                  <div class="col-12 col-md-12">
                    <?php // {{ $blog->bericht }} try {!! $blog->bericht !!} {!! $rema_founded[0]->rema_founded_editor !!} ?>
                    <textarea id="ckeditor" name="rema_founded_editor">{{ $rema_founded[0]->rema_founded_editor }}</textarea>

                  </div>
                  
                </div><br>
                <div class="row">
                  <input type="button" id="save_rema_founded" name="" class="btn btn-success btn-flat" value="Save">
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

    
@stop

@include('layouts.backend.footer')

@section('css')
@stop

@section('js')
@stop