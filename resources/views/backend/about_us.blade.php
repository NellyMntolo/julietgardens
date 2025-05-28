@extends('adminlte::page')

@section('title', 'About Us')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/about_us/edit" enctype="multipart/form-data" accept-charset="utf-8">
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
                      <label for="about_us_title">Page Title:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="about_us_title" type="text" class="form-control" name="about_us_title" value="{{ $about_us[0]->page_title }}" placeholder="Page Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_keywords">Page Keywords:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="about_us_keywords" rows="3" name="about_us_keywords" placeholder="Page Keywords" required>{{ $about_us[0]->page_keywords }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_description">Page Description:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="about_us_description" rows="3" name="about_us_description" placeholder="Page Description" required>{{ $about_us[0]->page_description }}</textarea>
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
                      <!-- <input type="file" name="about_us_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_about_one" name="about_us_image">
                          <label class="custom-file-label" for="customFile_about_one">Choose a Banner</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($about_us[0]->page_image)) {
                          echo '<img src="'.$about_us[0]->page_image.'">';
                        } else {
                          echo '<img id="actual_preview_about_one" src="https://picsum.photos/200/200">';
                        }
                      ?>                                         
                    </div>


                    <div class="form-group">
                      <label for="about_us_title">Header Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="header_title" value="{{ $about_us[0]->header_title }}" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_keywords">Header Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="header_description" placeholder="Header Short Description" required maxlength="200">{{ $about_us[0]->header_description }}</textarea>
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
                      <label for="about_us_title">Section One Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="header_title_two" value="{{ $about_us[0]->header_title_two }}" placeholder="Section One Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_keywords">Section One Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="header_description_two" placeholder="Section One Short Description" required>{{ $about_us[0]->header_description_two }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_keywords">Section One Longer Description</label>
                      <div class="input-group mb-3">
                        <textarea class="form-control" id="header_description_three" rows="3" name="header_description_three" placeholder="Section One Longer Description" required>{{ $about_us[0]->header_description_three }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Seeds</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-percent text-black"></i></span>
                        </div>
                        <input type="number" min="20" class="form-control" name="farm_seeds" value="{{ $about_us[0]->farm_seeds }}" placeholder="Seeds" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Growth</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-percent text-black"></i></span>
                        </div>
                        <input type="number" min="20" class="form-control" name="farm_growth" value="{{ $about_us[0]->farm_growth }}" placeholder="Growth" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Economy</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-percent text-black"></i></span>
                        </div>
                        <input type="number" min="20" class="form-control" name="farm_economy" value="{{ $about_us[0]->farm_economy }}" placeholder="Section One Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Planting</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-percent text-black"></i></span>
                        </div>
                        <input type="number" min="20" class="form-control" name="farm_planting" value="{{ $about_us[0]->farm_planting }}" placeholder="Section One Title" required>
                      </div>                     
                    </div>

                <div class="row"></div>
                
            </div>
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
                  Section Two
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group col-md-3">
                      <label>Background</label>
                      <!-- <input type="file" name="about_us_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_about_two" name="about_us_image_two">
                          <label class="custom-file-label" for="customFile_about_two">Choose a Background</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($about_us[0]->page_image_two)) {
                          echo '<img src="'.$about_us[0]->page_image_two.'">';
                        } else {
                          echo '<img id="actual_preview_about_two" src="https://picsum.photos/200/200">';
                        }
                      ?>                                         
                    </div>


                    <div class="form-group">
                      <label for="about_us_title">Section Two Quote</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_quote" value="{{ $about_us[0]->section_quote }}" placeholder="Section Two Quote" required>
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
                      <label for="about_us_title">Section Three Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="header_title_four" value="{{ $about_us[0]->header_title_four }}" placeholder="Section Three Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="">Section Three Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="header_description_four" placeholder="Section Three Description" required>{{ $about_us[0]->header_description_four }}</textarea>
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
	    // CKEDITOR.replace( 'header_description_three' );
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