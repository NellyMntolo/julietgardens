@extends('adminlte::page')

@section('title', 'Featured')

@include('layouts.backend.notifications')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
      @csrf   

      <input type="hidden" name="locale" value="en">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Featured Services <!-- DataTable with minimal features & hover style, --> <?php //foreach ($active_language as $value) { echo 'language name: '.$value->name; }?></h3>
            <div class="card-tools"><a href="#" class="btn btn-success btn-flat" data-toggle="modal" data-target="#new_social_network"><i class="fas fa-fw fa-plus"></i></a></div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="social_networks_table" class="table table-bordered table-hover text-center">
              <thead>
              <tr>
                
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Sort</th>
              </tr>
              </thead>
              <tbody id="social_media_sorter">

                <?php foreach ($services_featured as $featured) {
                                    echo '<tr class="lang-list">
                                    <td><img src="'.$featured->service_featured_image.'"></td>
                                    <td>'.$featured->service_featured_title.'</td>                                            
                                    <td>'.$featured->service_featured_description.'</td>
                                    <td>'.$featured->service_featured_sort.'</td>
                                          </tr>';
                                }?>
                                

                <!-- <tr class="social-list">
                    <td>1</td>
                    <td>service_featured_image</td>
                    <td>service_featured_title Title</td>
                    <td>service_featured_description</td>
                    <td>service_featured_sort</td>
                    <td class="col-2">
                      <a href="/admin/settings/social_update" name="s_save" class="btn btn-success btn-flat col-5"><i class="fas fa-fw fa-check"></i>
                      </a>
                      <a href="/admin/settings/social_delete" name="s_delete" class="btn btn-danger btn-flat col-5" style="float: right;"><i class="fas fa-fw fa-times"></i>
                      </a>
                    </td>
                </tr> -->

                <?php 
                /*
                 foreach ($social_media as $s_media) {
                  // echo $value->name;

                  $target_option = '';
                  $visibility_option = '';

                  if ($s_media->s_target == '_self' ){
                    $target_option = '<option value="'.$s_media->s_target.'">Current Page</option>
                                      <option value="_blank">New Page</option>';
                  } elseif ($s_media->s_target == '_blank') {
                    $target_option = '<option value="'.$s_media->s_target.'">New Page</option>
                                      <option value="_self">Current Page</option>';
                  }

                  if ($s_media->s_visibility == '1' ){
                    $visibility_option = '<option value="'.$s_media->s_visibility.'">Show</option>
                                          <option value="0">Hide</option>';
                  } elseif ($s_media->s_visibility == '0') {
                    $visibility_option = '<option value="'.$s_media->s_visibility.'">Hide</option>
                                          <option value="1">Show</option>';
                  }
                  echo '<tr class="social-list">
                          <td>'.$s_media->id.' <input type="hidden" name="s_id" value="'.$s_media->id.'"></td>
                          <td>'.$s_media->s_name.'</td>
                          <td>
                            <select class="form-control" style="width: 100%;" name="s_target">
                              '.$target_option.'
                            </select>
                          </td>
                          <td>
                            <select class="form-control" style="width: 100%;" name="s_visibility">
                              '.$visibility_option.'
                            </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" name="s_url" value="'.$s_media->s_url.'">
                          </td>
                          <td>
                            '.$s_media->s_sort.'
                          </td>
                          <td class="col-2">
                            <a href="/admin/settings/social_update" name="s_save" class="btn btn-success btn-flat col-5"><i class="fas fa-fw fa-check"></i>
                            </a>
                            <a href="/admin/settings/social_delete" name="s_delete" class="btn btn-danger btn-flat col-5" style="float: right;"><i class="fas fa-fw fa-times"></i>
                            </a>
                          </td>
                        </tr>'; 
                  } */                             
              ?>

              </tbody>
              <!-- <tfoot>
              </tfoot> -->
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </form>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

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
                  Service Details
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">

                    <div class="form-group col-md-3">
                      <label>Featured Service Image</label>
                      <!-- <input type="file" name="about_us_image"> -->
                      <div class="custom-file ">
                          <input type="file" accept="image/*" class="custom-file-input preview_image" id="customFile" name="about_us_image">
                          <label class="custom-file-label" for="customFile">Choose a Image</label>
                      </div>
                    </div>

                    <div class="form-group" style="width: 95%;">
                      <?php 
                        // if(!empty($about_us[0]->page_image)) {
                        //   echo '<img src="'.$about_us[0]->page_image.'">';
                        // } else {
                          echo '<img id="actual_preview" src="https://picsum.photos/200/200">';
                        // }
                      ?>                                         
                    </div>



                    <div class="form-group">
                      <label for="service_featured_title">Featured Service Title:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-pencil-square-o text-black"></i></span>
                        </div>
                        <input id="service_featured_title" type="text" class="form-control" name="service_featured_title" value="{{-- $services_featured[0]->page_title --}}" placeholder="Featured Service Title" required>
                      </div>                     
                    </div>

                    <div class="form-group">
                      <label for="service_featured_description">Featured Service Description:</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-keyboard-o text-black"></i></span>
                        </div>
                        <textarea class="form-control" id="service_featured_description" rows="3" name="service_featured_description" placeholder="Featured Service Description" required>{{-- $services_featured[0]->page_keywords --}}</textarea>
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