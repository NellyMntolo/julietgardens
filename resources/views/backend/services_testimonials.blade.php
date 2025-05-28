@extends('adminlte::page')

@section('title', 'Testimonials')

@include('layouts.backend.notifications')

@section('content')
<section class="content">

<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  All Testimonials
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>Locale</th>
                                  <th>Image</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                </tr>
                                </thead>
                                <tbody id="lang_sorter">

                                  <?php foreach ($services_testimonials as $testimonial) {
                                    echo '<tr class="lang-list">
                                    <td>'.$testimonial->locale.'</td>
                                    <td><img src="'.$testimonial->service_testimonials_image.'"></td>                                            
                                    <td>'.$testimonial->service_testimonials_title.'</td>
                                    <td>'.$testimonial->service_testimonials_description.'</td>
                                          </tr>';
                                }?>
                                
                                </tbody>
                              </table>  


                <div class="row"></div>
                
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->

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