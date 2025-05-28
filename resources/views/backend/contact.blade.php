@extends('adminlte::page')

@section('title', 'About Us')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/contact_us/edit" enctype="multipart/form-data" accept-charset="utf-8">
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
                      <label for="contact_us_title">Page Title:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="contact_us_title" type="text" class="form-control" name="contact_us_title" value="{{ $contact[0]->page_title }}" placeholder="Page Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="contact_us_keywords">Page Keywords:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="contact_us_keywords" rows="3" name="contact_us_keywords" placeholder="Page Keywords" required>{{ $contact[0]->page_keywords }}</textarea>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="contact_us_description">Page Description:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="contact_us_descriptioncontact_us_description" rows="3" name="contact_us_description" placeholder="Page Description" required>{{ $contact[0]->page_description }}</textarea>
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
                      <!-- <input type="file" name="contact_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFileContact" name="page_image">
                          <label class="custom-file-label" for="customFileContact">Choose a Banner</label>
                      </div>

                      <div class="form-group" style="width: 95%;">
                      <?php 
                        if(!empty($contact[0]->page_image)) {
                          echo '<img id="actual_contact_preview_one" src="'.$contact[0]->page_image.'">';
                        } else {
                          echo '<img id="actual_contact_preview_one" src="https://picsum.photos/200/200">';
                        }
                      ?>                                         
                    </div>
                    </div>


                    <div class="form-group">
                      <label for="contact_title">Header Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="contact_title" type="text" class="form-control" name="header_title" value="{{ $contact[0]->header_title }}" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="contact_keywords">Header Short Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="header_description" rows="3" name="header_description" placeholder="Header Short Description" required>{{ $contact[0]->header_description }}</textarea>
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
                  Content
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group">
                        <label for="contact_name">Content Header Title</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_title" type="text" class="form-control" name="content_header_title" value="{{ $contact[0]->content_header_title }}" placeholder="Content Header Title" required>
                        </div>                     
                      </div>

                      <div class="form-group">
                      <label for="contact_keywords">Content Header Description</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="header_description" rows="3" name="content_header_description" placeholder="Content Header Description" required>{{ $contact[0]->header_description }}</textarea>
                      </div>                     
                    </div>

                      <div class="form-group">
                        <label for="contact_name">Contact Name</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_title" type="text" class="form-control" name="contact_name" value="{{ $contact[0]->contact_name }}" placeholder="Contact Name" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_email">Contact Email</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_email" type="text" class="form-control" name="contact_email" value="{{ $contact[0]->contact_email }}" placeholder="Contact Email" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_subject">Contact Subject</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_subject" type="text" class="form-control" name="contact_subject" value="{{ $contact[0]->contact_subject }}" placeholder="Contact Subject" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_message">Contact Message</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_message" type="text" class="form-control" name="contact_message" value="{{ $contact[0]->contact_message }}" placeholder="Contact Message" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_button">Contact Submit Button</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_button" type="text" class="form-control" name="contact_button" value="{{ $contact[0]->contact_button }}" placeholder="Contact Submit Button" required>
                        </div>                     
                      </div>

                      <div class="form-group col-md-3">
                        <label>CEO Image</label>
                        <div class="custom-file ">
                            <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFileContact_two" name="ceo_image">
                            <label class="custom-file-label" for="customFileContact_two">Choose a CEO Image</label>
                        </div>
                      </div>
                      <div class="form-group" style="width: 95%;">
                        <?php 
                          if(!empty($contact[0]->ceo_image)) {
                            echo '<img id="actual_contact_preview_two" src="'.$contact[0]->ceo_image.'">';
                          } else {
                            echo '<img id="actual_contact_preview_two" src="https://picsum.photos/200/200">';
                          }
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="contact_ceo_title">Contact CEO Title</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_ceo_title" type="text" class="form-control" name="contact_ceo_title" value="{{ $contact[0]->contact_ceo_title }}" placeholder="Contact CEO Title" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_ceo_description">Contact CEO Description</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_ceo_description" type="text" class="form-control" name="contact_ceo_description" value="{{ $contact[0]->contact_ceo_description }}" placeholder="Contact CEO Description" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_follow">Contact Follow</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_follow" type="text" class="form-control" name="contact_follow" value="{{ $contact[0]->contact_follow }}" placeholder="Contact Follow" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_mail_us">Contact Mail Us</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_mail_us" type="text" class="form-control" name="contact_mail_us" value="{{ $contact[0]->contact_mail_us }}" placeholder="Contact Mail Us" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_mail_us_details">Contact Mail Us Details</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_mail_us_details" type="text" class="form-control" name="contact_mail_us_details" value="{{ $contact[0]->contact_mail_us_details }}" placeholder="Contact Mail Address" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_phone">Contact Phone</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_phone" type="text" class="form-control" name="contact_phone" value="{{ $contact[0]->contact_phone }}" placeholder="Contact Phone" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_phone_details">Contact Phone Details</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_phone_details" type="text" class="form-control" name="contact_button" value="{{ $contact[0]->contact_phone_details }}" placeholder="Contact Phone Details" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_map_lat">Contact Map Lat</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_map_lat" type="text" class="form-control" name="contact_map_lat" value="{{ $contact[0]->contact_map_lat }}" placeholder="Contact Map Lat" required>
                        </div>                     
                      </div>
                      <div class="form-group">
                        <label for="contact_map_long">Contact Map Long</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                          </div>
                          <input id="contact_map_long" type="text" class="form-control" name="contact_map_long" value="{{ $contact[0]->contact_map_long }}" placeholder="Contact Map Long" required>
                        </div>                     
                      </div>
                  </div>                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-flat pull-right">Save</button>
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
    //     filebrowserUploadUrl: "{{-- -- -- route('upload', ['_token' => csrf_token() ]) -- -- --}}",
    //     filebrowserUploadMethod: 'form'
    // });
    </script>
  <script>
      // CKEDITOR.replace( 'editor' );
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