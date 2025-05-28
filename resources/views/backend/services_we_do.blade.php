@extends('adminlte::page')

@section('title', 'We Do')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/services_featured/edit" enctype="multipart/form-data" accept-charset="utf-8">
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
                  We Do
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">


                    <div class="form-group col-md-3">
                      <label>Banner</label>
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_we_do" name="service_we_do_image">
                          <label class="custom-file-label" for="customFile_we_do">Choose a Banner</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($services_we_do[0]->service_we_do_image)) {
                          echo '<img src="'.$services_we_do[0]->service_we_do_image.'">';
                        } else {
                          echo '<img id="actual_preview_we_do" src="https://picsum.photos/200/200">';
                        }
                      ?>                                         
                    </div>

                    <div class="form-group">
                      <label for="services_keywords">We Do Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="service_we_do_title" placeholder="We Do Title" required><!-- OFFSET ERROR --> {{-- $services_we_do[0]->service_we_do_title --}}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="services_description">We Do Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="service_we_do_description" placeholder="We Do Description" required>{{-- $services_we_do[0]->service_we_do_description --}}</textarea>
                      </div>                     
                    </div>                  

                  </div>
                  
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-flat pull-right">Save</button>
                  </div>
                </div>
                <div class="row"></div>
                
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
    <link rel="stylesheet" href="/css/backend/admin_custom.css">
@stop

@section('js')
    <!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->
    <!-- <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script> -->
    <script>
    // CKEDITOR.replace( 'editor', {
    //     filebrowserUploadUrl: "{{-- -- route('upload', ['_token' => csrf_token() ]) -- --}}",
    //     filebrowserUploadMethod: 'form'
    // });
    </script>
  <script>
      CKEDITOR.replace( 'editor' );
  </script> 
<script> 
  // Enable navigation prompt
  window.onbeforeunload = function() {
      return true;
  };
  // Remove navigation prompt
  window.onbeforeunload = null;
</script>
@stop