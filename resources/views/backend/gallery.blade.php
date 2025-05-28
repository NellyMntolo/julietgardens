@extends('adminlte::page')

@section('title', 'About Us')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/gallery/edit" enctype="multipart/form-data" accept-charset="utf-8">
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
                      <label for="gallery_title">Page Title:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="gallery_title" type="text" class="form-control" name="gallery_title" value="{{ $gallery[0]->page_title }}" placeholder="Page Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="gallery_keywords">Page Keywords:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="gallery_keywords" rows="3" name="gallery_keywords" placeholder="Page Keywords" required>{{ $gallery[0]->page_keywords }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="gallery_description">Page Description:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="gallery_description" rows="3" name="gallery_description" placeholder="Page Description" required>{{ $gallery[0]->page_description }}</textarea>
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
                      <!-- <input type="file" name="gallery_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_gallery" name="gallery_image">
                          <label class="custom-file-label" for="customFile_gallery">Choose a Banner</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($gallery[0]->page_image)) {
                          echo '<img src="'.$gallery[0]->page_image.'">';
                        } else {
                          echo '<img id="actual_preview_gallery" src="https://picsum.photos/200/200">';
                        }
                      ?>

                      <!-- <img src="{{-- $gallery[0]->page_image  --}}"> -->
                                         
                    </div>


                    <div class="form-group">
                      <label for="gallery_title">Header Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="gallery_title" type="text" class="form-control" name="header_title" value="{{ $gallery[0]->header_title }}" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="gallery_keywords">Header Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="header_description" rows="3" name="header_description" placeholder="Header Short Description" required>{{ $gallery[0]->header_description }}</textarea>
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
                  Section
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group">
                      <label for="gallery_title">Section Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="gallery_title" type="text" class="form-control" name="content_header_title" value="{{ $gallery[0]->content_header_title }}" placeholder="Section Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="gallery_keywords">Section Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="content_header_description" placeholder="Section Short Description" required>{{ $gallery[0]->content_header_description }}</textarea>
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