@extends('adminlte::page')

@section('title', 'About Us')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/about_us/about_update_team" enctype="multipart/form-data" accept-charset="utf-8">
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
                  Team Members
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group col-md-3">
                      <label>Add Member Image</label>
                      <!-- <input type="file" name="about_us_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_about_one" name="about_us_team_image">
                          <label class="custom-file-label" for="customFile_about_one">Choose a Banner</label>
                      </div>
                    </div>
                    <div class="form-group" style="width: 95%;">                      
                          <img id="actual_preview_about_one" src="https://picsum.photos/200/200">                                   
                    </div>


                    <div class="form-group">
                      <label for="about_us_title">Name</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="about_us_team_name" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Job Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="about_us_team_title" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Social</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="about_us_team_socials_one" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Social</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="about_us_team_socials_two" placeholder="Header Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="about_us_title">Social </label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="about_us_team_socials_three" placeholder="Header Title" required>
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

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Others
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <?php  

                      foreach ($about_team as $team_member) {
                        // code...
                        // echo $team_member->about_us_team_name;
                        // team_member->about_us_team_title;
                        // team_member->about_us_team_image;
                        // about_us_team_socials_one

                        echo  '<div class="col-md-12 col-lg-6 col-xl-4">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="'.$team_member->about_us_team_image.'" alt="Dist Photo 3">
                                        <div class="card-img-overlay">
                                          <h5 class="card-title text-primary">'.$team_member->about_us_team_name.'</h5><br>
                                          <h5 class="card-title text-primary">'.$team_member->about_us_team_title.'</h5><br>
                                          <p></p>
                                          <!-- <a href="#" class="text-primary">Last update 3 days ago</a> -->
                                          <a href="#" class="text-primary">Delete</a>
                                        </div>
                                      </div>
                                    </div>';
                      }

                     ?>

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