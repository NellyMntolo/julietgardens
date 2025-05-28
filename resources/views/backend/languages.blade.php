@extends('adminlte::page')

@section('title', 'Languages')

@include('layouts.backend.notifications')

@section('content')
<div class="wrapper">

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#all_languages" data-toggle="tab">All Languages</a></li>
                  <li class="nav-item"><a class="nav-link" href="#language_settings" data-toggle="tab">Language Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class=" active tab-pane" id="profile">   
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Company Brief Info.</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                                @csrf
                                <div class="row">
                                  <div class="col-4">
                                    <div class="form-group">
                                      <label>Login Background Image:</label>
                                      <div class="input-group">
                                        <input type="file" name="web_logo">
                                      </div><!-- /.input group -->
                                      <div class="input-group logo_drop"><!-- dropzone (class) -->
                                        <img src="https://picsum.photos/300/300">
                                      </div><!-- /.input group -->                  
                                    </div>
                                    <div class="form-group">
                                      <label>Website Name: <!-- Website Name --></label><br>
                                      <div class="input-group">
                                        <input type="text" name="web_name" class="form-control" value="" placeholder="Website Name">
                                      </div><!-- /.input group -->                       
                                    </div>
                                    <div class="form-group">
                                        <label>Website URL Address: <!-- Website URL --></label><br>
                                        <div class="input-group">
                                          <input type="text" name="web_url" class="form-control" value="" placeholder="Website URL Address">
                                        </div><!-- /.input group -->                       
                                    </div>                                    
                                </div><!-- col-4 -->

                                <div class="col-8">
                                  <!-- TO-D0  passwords, general stuff like the older backend -->
                                    <div class="form-group">
                                      <label>Company Name: <!-- Website Name --></label><br>
                                      <div class="input-group">
                                        <input type="text" name="web_name" class="form-control" value="" placeholder="Company Name">
                                      </div><!-- /.input group -->                       
                                    </div>
                                    <div class="form-group">
                                      <label>Company Slogan: <!-- Website Name --></label><br>
                                      <div class="input-group">
                                        <input type="text" name="web_name" class="form-control" value="" placeholder="Company Slogan">
                                      </div><!-- /.input group -->                       
                                    </div>
                                </div><!-- col-8 -->
                              </div><!-- row -->

                                  <div class="form-group row">
                                    <div class="col-sm-10">
                                      <button type="button" class="btn btn-success btn-flat">Save</button>
                                    </div>
                                  </div>
                              </form>                             
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  <!-- /.tab-pane -->


                  <div class="tab-pane" id="all_languages">   
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Sort Languages</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>Language Code</th>
                                  <th>Language name</th>
                                  <th>Current status</th>
                                  <th>Default Language</th>
                                  <th>Active Languages</th>
                                  <th>Sort</th>
                                </tr>
                                </thead>
                                <tbody id="lang_sorter">

                                  <?php foreach ($language as $value) {
                                    // echo $value->name;
                                    echo '<tr class="lang-list">
                                            <td>'.$value->locale.'</td>
                                            <td>'.$value->name.'</td>
                                            <td>'.$value->status.'</td>
                                            <td>'.$value->default_lang.'</td>
                                            <td>'.$value->active_lang.'</td>
                                            <td>'.$value->lang_sort.'</td>
                                          </tr>';
                                }?>
                                
                                </tbody>
                              </table>                              
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  <!-- /.tab-pane -->



                  <?php /*
                  <div class="tab-pane" id="language_settings">   
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Language Settings</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>Language Code</th>
                                  <th>Language name</th>
                                  <th>Current status</th>
                                  <th>Default Language</th>
                                  <th>Active Languages</th>
                                  <th>Sort</th>
                                </tr>
                                </thead>
                                <tbody id="lang_sorter">

                                  <?php foreach ($language as $value) {
                                    // echo $value->name;
                                    echo '<tr class="lang-list">
                                            <td>'.$value->locale.' 3</td>
                                            <td>'.$value->name.'</td>
                                            <td>'.$value->status.'</td>
                                            <td>'.$value->default_lang.'</td>
                                            <td>'.$value->active_lang.'</td>
                                            <td>'.$value->lang_sort.'</td>
                                          </tr>';
                                }?>
                                
                                </tbody>
                              </table>                              
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  <!-- /.tab-pane -->
                  */ ?>

                  <div class="tab-pane" id="language_settings">


                      <!-- phone mask -->
                  <div class="form-group">
                    <label>Add a New Language :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-language text-aqua"></i>
                      </div>
                      <select class="selectpicker" name="new_language" id="form-select">
                        <option value="">Select</option>
                        <?php // echo $new_language; ?>
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


                  <div class="form-group">
                    <label>Change/Set Default :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-language text-aqua"></i>
                      </div>
                      <select class="selectpicker" name="default_language" id="form-select">
                        <option value="">Select</option>
                        <?php // echo $available_language; ?>
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->





                <div class="card card-solid">
                <div class="card-header">
                  <h3 class="card-title">Additional Language Information</h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Unlink/Remove</th>
                        <th>Lang Code</th>
                        <th>Lang Name</th>
                        <th>Lang Default</th>
                        <th>Active For Front-End</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-light-blue disabled color-palette">
                        <td><form method="get" action="/Admin/AllProfile"><button type="submit" class="btn btn-primary btn-flat disabled" disabled title="Remove This Language" data-toggle="tooltip"><i class="fa fa-unlink"></i></button><input type="hidden" name="remove_lang" value="$avail_idx"></form></td>
                        <td>en</td>
                        <td>English</td>
                        <td><?php // echo $avail_info_lang_swap; ?></td>
                        <td>yes</td>
                      </tr>
                      <?php // echo $avail_info_language; ?>
                                         
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Unlink/Remove</th>
                        <th>Lang Code</th>
                        <th>Lang Name</th>
                        <th>Lang Default</th>
                        <th>Active For Front-End</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.card-body -->
              </div><!-- /.box -->
            </div><!-- /.tab-pane -->



<?php /*
                
                  <div class="tab-pane" id="language_settings">
                    <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                    @csrf

                    <div class="row">
                    <div class="col-12">
                    <!-- SEO -->
                      <div class="form-group">
                        <label for="seo_title" class="col-sm-6 col-form-label">Setting 1</label>
                        <div class="col-sm-12">
                          <input type="text" name="seo_title" id="seo_title" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="seo_keywords" class="col-sm-6 col-form-label">Setting 2</label>
                        <div class="col-sm-12">
                          <textarea id="seo_keywords" class="form-control" rows="4" name="seo_keywords" placeholder="SEO Keywords"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="seo_description" class="col-sm-6 col-form-label">Setting 3</label>
                        <div class="col-sm-12">
                          <textarea id="seo_description" class="form-control" rows="4" name="seo_description" placeholder="SEO Description"></textarea>
                        </div>
                      </div>
                      
                    
                  </div> <!-- col-12 -->
                </div> <!-- row -->
              </div><!-- col-md-12 -->
  
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <button type="button" class="btn btn-success btn-flat">Save</button>
                        </div>
                      </div>
                </form>
              <!-- /.tab-pane -->
              */ ?>


                </div>
                <!-- /.tab-content -->
              
            </div>
            <!-- /.nav-tabs-custom -->

            <?php /* <!-- toasts -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Toastr Examples
                </h3>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-success toastrDefaultSuccess">
                  Launch Success Toast
                </button>
                <button type="button" class="btn btn-info toastrDefaultInfo">
                  Launch Info Toast
                </button>
                <button type="button" class="btn btn-danger toastrDefaultError">
                  Launch Error Toast
                </button>
                <button type="button" class="btn btn-warning toastrDefaultWarning">
                  Launch Warning Toast
                </button>
              </div>              
            </div>
            <!-- /.card --> */ ?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->      
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
    </div>
  <!-- /.content-wrapper -->
    
@stop

@include('layouts.backend.footer')

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
@stop