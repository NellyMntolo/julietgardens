@extends('adminlte::page')

@section('title', 'News')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <form method="post" action="/admin/index/news_update" enctype="multipart/form-data" accept-charset="utf-8">
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
                  Add News
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group col-md-3">
                      <label>News Image</label>
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile_news" name="news_image">
                          <label class="custom-file-label" for="customFile_news">Choose Image</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                        <img id="actual_preview_news" src="https://picsum.photos/200/200">
                    </div>

                    <div class="form-group">
                      <label for="index_title">News Image Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="news_image_title" placeholder="News Image Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_title">News Content Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input type="text" class="form-control" name="news_content_title" placeholder="News Content Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="index_description">News Content</label>
                      <div class="input-group mb-3">
                        <textarea id="news_content" class="form-control" rows="3" name="news_content" placeholder="News Content" required></textarea>
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

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Other News
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                         
                        <?php
                        
                        
                          foreach($index_news as $news){

                            echo  '<div class="col-md-12 col-lg-6 col-xl-4">
                                      <div class="card mb-2">
                                        <img class="card-img-top" src="'.$news->news_image.'" alt="Dist Photo 3">
                                        <div class="card-img-overlay">
                                          <h5 class="card-title text-primary">'.$news->news_image_title.'</h5><br>
                                          <h5 class="card-title text-primary">'.$news->news_content_title.'</h5><br>
                                          <p>'.$news->news_content.'</p>
                                          <!-- <a href="#" class="text-primary">Last update 3 days ago</a> -->
                                          <a href="#" class="text-primary">Delete</a>
                                        </div>
                                      </div>
                                    </div>';
                          }

                       ?>
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

    </section>
    <?php /* @include('cookieConsent::index') */ ?>
@stop

@include('layouts.backend.footer')

@section('css')
    <link rel="stylesheet" href="/css/backend/admin_custom.css">
@stop

@section('js')
<script>
      // CKEDITOR.replace( 'news_content' );
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