@extends('adminlte::page')

@section('title', 'Index')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/index/update" enctype="multipart/form-data" accept-charset="utf-8">
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
                      <label for="index_title">Page Title:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="page_title" value="{{ $index[0]->page_title }}" placeholder="Page Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Page Keywords:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control"  rows="3" name="page_keywords" placeholder="Page Keywords" required>{{ $index[0]->page_keywords }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_description">Page Description:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="page_description" placeholder="Page Description" required>{{ $index[0]->page_description }}</textarea>
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
                      <!-- <input type="file" name="index_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile" name="page_image">
                          <label class="custom-file-label" for="customFile">Choose a Banner</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($index[0]->page_image)) {
                          echo '<img src="'.$index[0]->page_image.'">';
                        } else {
                          echo '<img id="actual_preview" src="https://picsum.photos/200/200">';
                        } 
                      ?>                                         
                    </div>

                    <div class="form-group">
                      <label for="index_title">Header Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="header_title" value="{{ $index[0]->header_title }}" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Header Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="header_description" placeholder="Header Short Description" required>{{ $index[0]->header_description }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">Header Contact Button</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="button_one" value="{{ $index[0]->button_one }}" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">Header Read More Button</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="button_two" value="{{ $index[0]->button_two }}" placeholder="Header Title" required>
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
                  Mini Section
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group">
                      <label for="index_title">Mini Section Title One</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="mini_header_one_title" value="{{ $index[0]->mini_header_one_title }}" placeholder="Mini Section Title One" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Mini Section Description One</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="mini_header_one_description" placeholder="Mini Section Description One" required>{{ $index[0]->mini_header_one_description }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">Mini Section Title Two</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="mini_header_two_title" value="{{ $index[0]->mini_header_two_title }}" placeholder="Mini Section Title Two" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Mini Section Description Two</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="mini_header_two_description" placeholder="Mini Section Description Two" required>{{ $index[0]->mini_header_two_description }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">Mini Section Title Three</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="mini_header_three_title" value="{{ $index[0]->mini_header_three_title }}" placeholder="Mini Section Title Three" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Mini Section Description Three</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="mini_header_three_description" placeholder="Mini Section Description Three" required>{{ $index[0]->mini_header_three_description }}</textarea>
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
                      <label for="index_title">Section One Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_one_title" value="{{ $index[0]->section_one_title }}" placeholder="Section One Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Section One Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="section_one_description" placeholder="Section One Description" required>{{ $index[0]->section_one_description }}</textarea>
                      </div>                     
                    </div>


                    index_SLIDES_LINK


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

                    <div class="form-group">
                      <label for="index_title">Section Two Title One</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_two_title_one" value="{{ $index[0]->section_two_title_one }}" placeholder="Section Two Title One" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Section Two Description One</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="section_two_description_one" placeholder="Section Two Description One" required>{{ $index[0]->section_two_description_one }}</textarea>
                      </div>                     
                    </div>


                    Running Numbers 


                    <div class="form-group col-md-3">
                      <label>Background</label>
                      <!-- <input type="file" name="index_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_section_two" name="section_two_image_two">
                          <label class="custom-file-label" for="customFile_section_two">Choose a Background</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($index[0]->section_two_image_two)) {
                          echo '<img src="'.$index[0]->section_two_image_two.'">';
                        } else {
                          echo '<img id="actual_index_section_two_preview" src="https://picsum.photos/200/200">';
                        } 
                      ?>                                         
                    </div>

                    <div class="form-group">
                      <label for="index_title">Section Two Title Two</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_two_title_two" value="{{ $index[0]->section_two_title_two }}" placeholder="Section Two Title Two" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Section Two Description Two</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="section_two_description_two" placeholder="Section Two Description Two" required>{{ $index[0]->section_two_description_two }}</textarea>
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
                      <label for="index_title">Section Three Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_three_title" value="{{ $index[0]->section_three_title }}" placeholder="Section Three Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Section Three Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="section_three_description" placeholder="Section Three Description" required>{{ $index[0]->section_three_description }}</textarea>
                      </div>                     
                    </div>

                    News_Section_LINK

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
                  Section Four
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group">
                      <label for="index_title">Section Four Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_four_title" value="{{ $index[0]->section_four_title }}" placeholder="Section Four Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_keywords">Section Four Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" rows="3" name="section_four_description" placeholder="Section Four Description" required>{{ $index[0]->section_four_description }}</textarea>
                      </div>                     
                    </div>


                    <div class="form-group col-md-3">
                      <label>Background</label>
                      <!-- <input type="file" name="index_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_section_four" name="section_four_image">
                          <label class="custom-file-label" for="customFile_section_four">Choose a Background</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($index[0]->section_four_image)) {
                          echo '<img src="'.$index[0]->section_four_image.'">';
                        } else {
                          echo '<img id="actual_index_section_four_preview" src="https://picsum.photos/200/200">';
                        } 
                      ?>                                         
                    </div>

                    <div class="form-group">
                      <label for="index_title">Section Four Name</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_four_name" value="{{ $index[0]->section_four_name }}" placeholder="Section Four Name" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">Section Four Email</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_four_email" value="{{ $index[0]->section_four_email }}" placeholder="Section Four Email" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">Section Four Button</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="section_four_button" value="{{ $index[0]->section_four_button }}" placeholder="Section Four Button" required>
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
<script> 
  // Enable navigation prompt
  window.onbeforeunload = function() {
      return true;
  };
  // Remove navigation prompt
  window.onbeforeunload = null;
</script>
@stop