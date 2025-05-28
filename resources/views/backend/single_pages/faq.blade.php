@extends('adminlte::page')

{{-- @include('view.layouts.backend.footer'); not found error --}}

@section('title', 'FAQ')

@include('layouts.backend.notifications')

@section('content')

<section class="content">
  <form method="post" action="{{ route('faq_update') }}" enctype="multipart/form-data" accept-charset="utf-8">
    @csrf
    <input type="hidden" name="locale" value="en">
    <input type="hidden" name="faq_id" value="{{ $faq[0]->id }}">
  <div class="container-fluid">
    <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  FAQ Title
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <?php // {{ $blog->bericht }} try {!! $blog->bericht !!} {!! $faq[0]->faq_editor !!} ?>
                    <input type="text" name="faq_title" value="{{ $faq[0]->faq_title }}">
                  </div>                  
                </div><br>
                <div class="row">
                  <input type="submit" id="save_faq" name="" class="btn btn-success btn-flat" value="Save">
                </div>
                
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  FAQ Question
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <?php // {{ $blog->bericht }} try {!! $blog->bericht !!} {!! $faq[0]->faq_editor !!} ?>
                    <textarea id="faq_question" name="faq_question">{{ $faq[0]->faq_question }}</textarea>
                  </div>                  
                </div><br>
                <div class="row">
                  <input type="submit" id="save_faq" name="" class="btn btn-success btn-flat" value="Save">
                </div>
                
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->

        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  FAQ ANSWER
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <textarea id="faq_answer" name="faq_answer">{{ $faq[0]->faq_question }}</textarea>
                  </div>                  
                </div><br>
                <div class="row">
                  <input type="submit" id="save_faq" name="" class="btn btn-success btn-flat" value="Save">
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
<script type="text/javascript">
      CKEDITOR.replace( 'faq_question', {
          customConfig: '/vendor/ckeditor/config.js',
      });
      CKEDITOR.replace( 'faq_answer', {
          customConfig: '/vendor/ckeditor/config.js',
      });
</script>
@stop