@extends('adminlte::page')

@section('title', 'Services')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/services/edit" enctype="multipart/form-data" accept-charset="utf-8">
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
                  SEO
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">


                    <div class="form-group">
                      <label for="services_title">Page Title:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="services_title" type="text" class="form-control" name="services_title" value="{{ $services[0]->page_title }}" placeholder="Page Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="services_keywords">Page Keywords:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="services_keywords" rows="3" name="services_keywords" placeholder="Page Keywords" required>{{ $services[0]->page_keywords }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="services_description">Page Description:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="services_description" rows="3" name="services_description" placeholder="Page Description" required>{{ $services[0]->page_description }}</textarea>
                      </div>                     
                    </div>                  

                  </div>
                  
                </div>
                <div class="row">
                </div>
                
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Banner & Header
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group col-md-3">
                      <label>Banner</label>
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_service_one" name="services_image">
                          <label class="custom-file-label" for="customFile_service_one">Choose a Banner</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($services[0]->page_image)) {
                          echo '<img id="actual_preview_service_one" src="'.$services[0]->page_image.'">';
                        } else {
                          echo '<img id="actual_preview_service_one" src="https://picsum.photos/200/200">';
                        }
                      ?>                                         
                    </div>


                    <div class="form-group">
                      <label for="header_title">Header Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="header_title" type="text" class="form-control" name="header_title" value="{{ $services[0]->header_title }}" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="header_description">Header Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="header_description" rows="3" name="header_description" placeholder="Header Short Description" required>{{ $services[0]->header_description }}</textarea>
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


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Section One
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group">
                      <label for="header_title">Section One Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="services_featured_title" value="{{ $services[0]->services_featured_title }}" placeholder="Section One Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="header_description">Section One Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="services_featured_description" placeholder="Section One Short Description" required>{{ $services[0]->services_featured_description }}</textarea>
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


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Section Two
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group col-md-3">
                      <label>Background</label>
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_service_two" name="services_image_two">
                          <label class="custom-file-label" for="customFile_service_two">Choose a Background</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($services[0]->page_image)) {
                          echo '<img id="actual_preview_service_two" src="'.$services[0]->page_image.'">';
                        } else {
                          echo '<img id="actual_preview_service_two" src="https://picsum.photos/200/200">';
                        }
                      ?>                                         
                    </div>

                    <div class="form-group">
                      <label for="header_title">Section Two Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="services_we_do_title" value="{{ $services[0]->services_we_do_title }}" placeholder="Section Two Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="header_description">Section Two Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="services_we_do_description" placeholder="Section Two Short Description" required>{{ $services[0]->services_we_do_description }}</textarea>
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


       <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Section Three
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group">
                      <label for="header_title">Section Three Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="services_testimonials_title" value="{{ $services[0]->services_testimonials_title }}" placeholder="Section Three Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="header_description">Section Three Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="services_testimonials_description" placeholder="Section Three Short Description" required>{{ $services[0]->services_testimonials_description }}</textarea>
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