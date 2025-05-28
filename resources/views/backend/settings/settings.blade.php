@extends('adminlte::page')

@section('title', 'Settings')

@include('layouts.backend.notifications')

<?php //error_reporting(0); ?>

@section('content')
    <!-- Modals -->

    <?php /* BUG TEST
    <div class="modal fade" id="new_social_network" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Social Media</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="/admin/settings/social_create" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf
          <div class="modal-body">
            

                    <input type="hidden" name="s_id">
                    <div class="form-group">
                      <label>Social Media Name: <!-- Website Name --></label><br>
                      <div class="input-group">
                      <input type="text" class="form-control" name="s_name" placeholder="S.Media Name">
                    </div><!-- /.input group -->                       
                    </div>

                    <div class="form-group">
                      <label>Opening Type:</label><br>
                      <div class="input-group">
                      <select class="form-control" style="width: 100%;" name="s_target">
                        <option value="_blank">New Page</option>
                        <option value="_self">Current Page</option>
                      </select>
                    </div><!-- /.input group -->                       
                    </div>

                    <div class="form-group">
                      <label>Visibility:</label><br>
                      <div class="input-group">
                      <select class="form-control" style="width: 100%;" name="s_visibility">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                      </select>
                    </div><!-- /.input group -->                       
                    </div>

                    <div class="form-group">
                      <label>URL: <!-- Website URL --></label><br>
                      <div class="input-group">
                      <input type="text" class="form-control" name="s_url" placeholder="S.Media URL">
                    </div><!-- /.input group -->                       
                    </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-flat" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-flat">Save</button>
          </div>
          </form>
          
        </div>
      </div>
    </div>

    */ ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#general_settings" data-toggle="tab">General Settings</a></li>
                  <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab">SEO</a></li>
                  <li class="nav-item"><a class="nav-link" href="#smtp" data-toggle="tab">SMTP</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ftp" data-toggle="tab">FTP</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#xml" data-toggle="tab">XML</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="#social_networks" data-toggle="tab">Social Media Networks</a></li>
                  <li class="nav-item"><a class="nav-link" href="#functions" data-toggle="tab">Functions</a></li>
                  <li class="nav-item"><a class="nav-link" href="#sitemap" data-toggle="tab">Sitemap</a></li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="general_settings">

                    <!-- <textarea id="summernote"></textarea> -->
                    <!-- <textarea id="ckeditor"></textarea> -->

                    <!-- General Settings -->
              <form method="post" action="{{ url('general_settings') }}" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf

                      <input type="hidden" name="locale" value="{{ $general_settings[0]->locale }}">


                  <div class="row">
                    <div class="col-md-6">


                      <div class="form-group">
                        <label for="customFile">Logo:</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="company_logo">
                          <label class="custom-file-label" for="customFile">Choose A Logo</label>
                        </div>
                        <div class="input-group logo_drop"><!-- dropzone (class) -->
                          <img id="actual_preview" src="{{ $general_settings[0]->web_logo }}">
                        </div><!-- /.input group -->    
                      </div>

                        <?php /* <div class="form-group">
                          <label>Logo2:</label>
                          <div class="input-group">
                            <input type="file" name="web_logo">
                          </div><!-- /.input group -->
                          <div class="input-group logo_drop"><!-- dropzone (class) -->
                            <img src="{{-- $general_settings[0]->web_logo --}}">
                          </div><!-- /.input group -->                  
                        </div>

                        */ ?>
                    </div>
                  
                  
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Website Name: <!-- Website Name --></label><br>
                        <div class="input-group">
                        <input type="text" name="web_name" class="form-control" value="{{ $general_settings[0]->web_name }}" placeholder="Website Name">
                      </div><!-- /.input group -->                       
                      </div>

                      <div class="form-group">
                        <label>Website URL Address: <!-- Website URL --></label><br>
                        <div class="input-group">
                        <input type="text" name="web_url" class="form-control" value="{{ $general_settings[0]->web_url }}" placeholder="Website URL Address">
                      </div><!-- /.input group -->                       
                      </div>
                    </div>

                </div><!-- row -->
                  
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success btn-flat">Save</button>
                    </div>
                  </div>

                </form>                   
        </div>
          <!-- /.tab-pane -->

                  <div class="tab-pane" id="addemployee">
                    
                    <form method="post" action="{{ url('employee_settings') }}" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf


                      <input type="hidden" name="locale" value="en">

                      <?php /*<div class="row">

                        <div class="col-4">

                          <div class="form-group">
                            <label>Employee Image: {{-- $employees[0]->locale --}}</label>
                            <div class="input-group">
                              <input type="file" name="employee_image">
                            </div><!-- /.input group -->
                            <div class="input-group">
                              <img src="{{ $employees[0]->employee_image }}">
                            </div><!-- /.input group -->                  
                          </div>

                          <div class="form-group row">
                            <label for="employee_account" class="col-sm-12 col-form-label"> 管理員帳號 <!-- Administrator account --></label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_account" id="employee_account" placeholder="管理員帳號" value="{{ $rema_employees[0]->employee_account }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_password" class="col-sm-12 col-form-label">管理員密碼 <!-- Administrator password --></label>
                            <div class="col-sm-12">
                              <input type="password" class="form-control" name="employee_password" id="employee_password" placeholder="管理員密碼" <?php if($rema_employees[0]->employee_password != ''){ ?> disabled <?php //} ?> >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_name" class="col-sm-12 col-form-label">管理員姓名 <!-- Administrator name --></label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="管理員姓名" value="{{ $rema_employees[0]->employee_name }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_position" class="col-sm-12 col-form-label">管理員職務 <!--Administrator position --></label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_position" id="employee_position" placeholder="管理員職務" value="{{ $rema_employees[0]->employee_position }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_number" class="col-sm-12 col-form-label">管理員工號 <!-- Management employee number --></label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_number" id="employee_number" placeholder="管理員工號" value="{{ $rema_employees[0]->employee_number }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                              <input type="email" class="form-control" name="employee_email" id="employee_email" placeholder="Email" value="{{ $rema_employees[0]->employee_email }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_cell_phone" class="col-sm-12 col-form-label">Cell Phone</label>
                            <div class="col-sm-12">
                              <input type="tel" class="form-control" name="employee_cell_phone" id="employee_cell_phone" placeholder="Cell Phone" value="{{ $rema_employees[0]->employee_cell_phone }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_address" class="col-sm-12 col-form-label">Address</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_address" id="employee_address" placeholder="Address" value="{{ $rema_employees[0]->employee_address }}">
                            </div>
                          </div>

                        </div>


                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->

                      <div class="col-4">

                        <div class="form-group row"> <!-- EMPLOYEE RELATIVE -->
                            <label for="employee_relative_name" class="col-sm-12 col-form-label">Relative Name</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_relative_name" id="employee_relative_name" placeholder="Relative Name" value="{{ $rema_employees[0]->employee_relative_name }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_relationship" class="col-sm-12 col-form-label">Relationship</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_relationship" id="employee_relationship" placeholder="Relationship" value="{{ $rema_employees[0]->employee_relationship }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_relative_email" class="col-sm-12 col-form-label">Relative Email</label>
                            <div class="col-sm-12">
                              <input type="email" class="form-control" name="employee_relative_email" id="employee_relative_email" placeholder="Relative Email" value="{{ $rema_employees[0]->employee_relative_email }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_relative_cell_phone" class="col-sm-12 col-form-label">Relative Cell Phone</label>
                            <div class="col-sm-12">
                              <input type="tel" class="form-control" name="employee_relative_cell_phone" id="employee_relative_cell_phone" placeholder="Relative Cell Phone" value="{{ $rema_employees[0]->employee_relative_cell_phone }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="employee_relative_address" class="col-sm-12 col-form-label">Relative Address</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="employee_relative_address" id="employee_relative_address" placeholder="Relative Address" value="{{ $rema_employees[0]->employee_relative_address }}">
                            </div>
                          </div>
                        

                      </div>

                    </div> */ ?> <!-- main row -->

                    

                    <div class="row">
                      <div class="form-group ">
                        <div class="col-sm-12">
                          <button type="button" class="btn btn-success btn-flat">Save</button>
                        </div>
                      </div>
                    </div>
                    </form>

                    
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="change_employee_password">                    
                    <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf
                      <div class="form-group row">
                        <label for="employee_account" class="col-sm-2 col-form-label">用戶名 <!-- username --></label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="employee_account" id="employee_account" placeholder="Username" value="{{-- $rema_employees[0]->employee_account --}}" disabled>
                        </div>
                      </div>
                      <?php /*
                      <div class="form-group row">
                        <label for="employee_password" class="col-sm-2 col-form-label">原密碼 <!-- old password --></label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="employee_password" id="employee_password" placeholder="原密碼">
                        </div>
                      </div>
                      <?php */ ?>
                      <div class="form-group row">
                        <label for="employee_new_password" class="col-sm-2 col-form-label">新密碼 <!-- new password --></label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="employee_new_password" id="employee_new_password" placeholder="新密碼">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="employee_password_confirm" class="col-sm-2 col-form-label">重複密碼 <!--Repeat password --></label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="employee_password_confirm" id="employee_password_confirm" placeholder="重複密碼">
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-success btn-flat">Save</button>
                        </div>
                      </div>
                    </form>

                    
                  </div>
                  <!-- /.tab-pane -->





                  <div class="tab-pane" id="manage_employees">
                  <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf   
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">網站參數設置 <?php //foreach ($active_language as $value) { echo 'language name: '.$value->name; }?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="admin_account_table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <!-- <th>Image</th> -->
                                  <th>管理員帳號 <!-- Administrator account --></th>
                                  <th>管理員姓名 <!-- Administrator name --></th>
                                  <th>管理員職務 <!-- Administrator position --></th>
                                  <th>管理員工號 <!-- Management employee number --></th>
                                  <th>修改權限 <!-- edit permission  --></th>
                                  <th>刪除帳戶 <!-- Delete account --></th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php /*
                                   foreach ($admins as $admin) {

                                    $image_exist = '';
                                    if (!file_exists($admin->src) || $admin->src == '') {
                                      $image_exist = '/public/images/default_person.png';
                                    } else {
                                      $image_exist = $admin->src;
                                    }


                                    echo '<!-- Modal (all located in old base/pics directory) -->
                                          <div class="modal fade" id="admin_image_Modal_'.$admin->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">'.$admin->name.'</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">


                                                  <!-- <div class="table_modal_image"></div> -->



                                                  <img class="table_modal_image" src="/'.$image_exist.'">
                                                </div>
                                                <!-- <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div> -->
                                              </div>
                                            </div>
                                          </div>';

                                    echo '<tr>
                                            <td>'.$admin->user.'</td>
                                            <td>'.$admin->name.'</td>
                                            <td>'.$admin->job.'</td>
                                            <td>'.$admin->jobid.'</td>
                                            <td><a href="#" class="btn btn-warning btn-flat"><i class="fas fa-fw fa-eye"></i>修改權限</a></td>
                                            <td><a href="#" class="btn btn-danger btn-flat"><i class="fas fa-fw fa-trash"></i>刪除帳戶</a></td>
                                          </tr>';
                                    }

                                    // <td><li><a href="#" data-toggle="modal" data-target="#admin_image_Modal_'.$admin->id.'"><img class="img-circle img-bordered-sm table_image" src="/'.$image_exist.'" alt="View Image"></a></li></td>

                                    */
                                    
                                ?>
                                
                                </tbody>
                                <tfoot>
                                <!-- <tr>
                                  <th>Language Code</th>
                                  <th>Language name</th>
                                  <th>Current status</th>
                                  <th>Default Language</th>
                                  <th>Active Languages</th>
                                </tr> -->
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </form>

                    </div>
                  <!-- /.tab-pane -->


                  <div class="tab-pane" id="employee_usage">   
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">網站參數設置 <!-- DataTable with minimal features & hover style, --> <?php //foreach ($active_language as $value) { echo 'language name: '.$value->name; }?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="admin_maintainance_table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>選擇 <!-- choose  -- check input -- --></th>
                                  <th>管理員帳號 <!-- Administrator account (username) --></th>
                                  <th>發佈時間 <!-- release time --></th>
                                  <th>所屬模組 <!-- Owned module --></th>
                                  <th>$_POST 編輯內容 <!-- $_POST edit content --></th>
                                  <th>$_GET 編輯內容 <!-- $_GET edit content --></th>
                                  <th>IP <!-- IP address --></th>
                                </tr>
                                </thead>
                                <tbody>

                                  <?php /*
                                   foreach ($language as $value) {
                                    // echo $value->name;
                                    echo '<tr>
                                            <td>'.$value->locale.'</td>
                                            <td>'.$value->name.'</td>
                                            <td>'.$value->status.'</td>
                                            <td>'.$value->default_lang.'</td>
                                            <td>'.$value->active_lang.'</td>
                                          </tr>';
                                    }
                                    */ 
                                ?>
                                
                                </tbody>
                                <tfoot>
                                <!-- <tr>
                                  <th>Language Code</th>
                                  <th>Language name</th>
                                  <th>Current status</th>
                                  <th>Default Language</th>
                                  <th>Active Languages</th>
                                </tr> -->
                                </tfoot>
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




                
                  <div class="tab-pane" id="seo">
                    <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                    @csrf
                    <div class="box box-solid">

                    <div class="row">
                    <div class="col-12">


                    <div class="box box-solid">
                    <!-- SEO -->
                      <div class="form-group">
                        <label for="seo_title" class="col-sm-6 col-form-label">SEO Title</label>
                        <div class="col-sm-12">
                          <input type="text" name="seo_title" id="seo_title" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="seo_keywords" class="col-sm-6 col-form-label">SEO Keywords</label>
                        <div class="col-sm-12">
                          <textarea id="seo_keywords" class="form-control" rows="4" name="seo_keywords" placeholder="SEO Keywords">{{ $general_settings[0]->web_keywords }}</textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="seo_description" class="col-sm-6 col-form-label">SEO Description</label>
                        <div class="col-sm-12">
                          <textarea id="seo_description" class="form-control" rows="4" name="seo_description" placeholder="SEO Description">{{ $general_settings[0]->web_description }}</textarea>
                        </div>
                      </div>

                    </div> <!-- box -->
                      
                    
                  </div> <!-- col-12 -->
                </div> <!-- row -->
              </div><!-- col-md-12 -->

              <hr class="hrs">

              <!-- Google Analytics -->
              <div class="box box-solid">
                <div class="form-group">
                  <label for="ga_script_link" class="col-sm-6 col-form-label">Google Analytics Link</label>
                  <div class="col-sm-12">
                    <input type="text" name="ga_script_link" id="ga_script_link" class="form-control" placeholder="<script async src='https://www.googletagmanager.com/gtag/js?id=G-A123456789'></script>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ga_script" class="col-sm-6 col-form-label">Google Analytics Script</label>
                  <div class="col-sm-12">
                    <textarea id="ga_script" class="form-control" rows="4" name="ga_script" placeholder="Google Tags Script"></textarea>
                  </div>
                </div>
              </div><!-- col-md-12 -->

              <hr class="hrs">

              <?php /*
              <div class="box box-solid">
                Facebook
                <div class="form-group">
                  <label for="ga_script_link" class="col-sm-6 col-form-label">Facebook</label>
                  <div class="col-sm-12">
                    <input type="text" name="ga_script_link" id="ga_script_link" class="form-control" placeholder="<script async src='https://www.googletagmanager.com/gtag/js?id=G-A123456789'></script>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="ga_script" class="col-sm-6 col-form-label">Google Analytics Script</label>
                  <div class="col-sm-12">
                    <textarea id="ga_script" class="form-control" rows="4" name="ga_script" placeholder="Google Tags Script"></textarea>
                  </div>
                </div>
              </div><!-- col-md-12 -->

              <div class="box box-solid">
                Twitter
              </div><!-- col-md-12 -->

              <div class="box box-solid">
                IG
              </div><!-- col-md-12 -->

              <div class="box box-solid">
                Behance
              </div><!-- col-md-12 -->
*/ ?>
  
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <button type="button" class="btn btn-success btn-flat pull-right">Save</button>
                        </div>
                      </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            



                  <div class="tab-pane" id="smtp">
                    <form method="post" action="/admin/settings/smtp_update" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                    @csrf
                    <?php 
                      foreach ($smtp_settings as $smtp) {
                        $smtp_type_x = '';
                        if ($smtp->smtp_type == 'TLS'){
                          $smtp_type_x = '<option value="tls">'.$smtp->smtp_type.'</option>
                                          <option value="ssl">SSL</option>';
                        } elseif ($smtp->smtp_type == 'SSL') {
                          $smtp_type_x = '<option value="ssl">'.$smtp->smtp_type.'</option>
                                          <option value="tls">TSL</option>';
                        }
                      echo '<input type="hidden" name="smtp_id" value="'.$smtp->id.'">
                      <div class="form-group row">
                        <label for="smtp_type" class="col-sm-3 col-form-label">Security Type</label>
                        <div class="col-sm-4">
                          <select class="custom-select" required  name="smtp_type" id="smtp_type">
                            '.$smtp_type_x.'
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="smtp_host" class="col-sm-3 col-form-label">SMTP Host</label>
                        <div class="col-sm-4">
                          <input type="text" name="smtp_host" id="smtp_host" required class="form-control" placeholder="SMTP Host" value="'.$smtp->smtp_host.'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="smtp_port" class="col-sm-3 col-form-label">SMTP Port</label>
                        <div class="col-sm-4">
                          <input type="text" name="smtp_port" required class="form-control" id="smtp_port" placeholder="SMTP Port" value="'.$smtp->smtp_port.'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="smtp_username" class="col-sm-3 col-form-label">SMTP Username</label>
                        <div class="col-sm-4">
                          <input type="text" name="smtp_username" id="smtp_username" required class="form-control" placeholder="SMTP Username" value="'.$smtp->smtp_username.'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="smtp_password" class="col-sm-3 col-form-label">SMTP Password</label>
                        <div class="col-sm-4">
                          <input type="password" name="smtp_password" id="smtp_password" required class="form-control" placeholder="SMTP Password" value="'.$smtp->smtp_password.'">
                        </div>
                      </div>';
                    }
                  ?>

                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-success btn-flat pull-right">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->


                  <div class="tab-pane" id="ftp">
                    <form method="post" action="/admin/settings/ftp_update" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                    @csrf

                    <?php 
                      foreach ($ftp_settings as $ftp) {
                      echo '<input type="hidden" name="ftp_id" value="'.$ftp->id.'">
                      <div class="form-group row">
                        <label for="ftp_host" class="col-sm-2 col-form-label">FTP Host</label>
                        <div class="col-sm-3">
                          <input type="text" name="ftp_host" id="ftp_host" required class="form-control" placeholder="FTP Host" value="'.$ftp->ftp_host.'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="ftp_port" class="col-sm-2 col-form-label">FTP Port</label>
                        <div class="col-sm-3">
                          <input type="text" name="ftp_port" required class="form-control" id="ftp_port" placeholder="FTP Port" value="'.$ftp->ftp_port.'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="ftp_username" class="col-sm-2 col-form-label">FTP Username</label>
                        <div class="col-sm-3">
                          <input type="text" name="ftp_username" id="ftp_username" required class="form-control" placeholder="FTP Username" value="'.$ftp->ftp_username.'">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="ftp_password" class="col-sm-2 col-form-label">FTP Password</label>
                        <div class="col-sm-3">
                          <input type="password" name="ftp_password" id="ftp_password" required class="form-control" placeholder="FTP Password" value="'.$ftp->ftp_password.'">
                        </div>
                      </div>';
                    }

                  ?>
                      <!-- <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-success btn-flat pull-right">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                <div class="tab-pane" id="social_networks">
                <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf   

                      <input type="hidden" name="locale" value="en">
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Social Networks <!-- DataTable with minimal features & hover style, --> <?php //foreach ($active_language as $value) { echo 'language name: '.$value->name; }?></h3>
                              <div class="card-tools"><a href="#" class="btn btn-success btn-flat" data-toggle="modal" data-target="#new_social_network"><i class="fas fa-fw fa-plus"></i></a></div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="social_networks_table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Social Media</th>
                                  <th>Opening Type</th>
                                  <th>Visibility</th>
                                  <th>URL</th>
                                  <th>Sort</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="social_media_sorter">

                                  <?php 
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
                                    }                                    
                                ?>

                                </tbody>
                                <!-- <tfoot>
                                </tfoot> -->
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                    </form>

                    <!-- <div class="form-group">
                      <label>Date range test:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" name="" class="form-control float-right date_range">
                      </div>
                    </div> -->

                    </div>
                  <!-- /.tab-pane -->



                  <div class="tab-pane" id="functions">
                <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf   

                      <input type="hidden" name="locale" value="en">
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Function Settings</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              


                              <div class="form-group">
                                  <label>Enable/Disable E-commerce:</label>
                                  <div class="input-group">
                                  <input name="ecom_status" value="0" type="hidden">
                                  <input type="checkbox" style="opacity: 0;" id="ecom_status" name="ecom_status" class="form-control" data-on-color="success" data-off-color="default" value="1">
                                  <!-- Above visible checkbox, Temporary until DB is sorted -->

                                <?php /*  if($product_status == '1'){
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="ecom_status" name="ecom_status" class="form-control" data-on-color="success" data-off-color="default" checked value="1">';
                              } elseif($product_status == '0') {
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="ecom_status" name="ecom_status" class="form-control" data-on-color="success" data-off-color="default" value="0">';
                              } */ ?>

                                  <?php // echo $new_status;?>
                                </div><!-- /.input group -->                       
                              </div>


                              <div class="form-group" disabled>
                                  <label>Enable/disable Microsoft (docs?/Uploads?):</label>
                                  <div class="input-group">
                                  <input name="ms_status" value="0" type="hidden">
                                  <input type="checkbox" style="opacity: 0;" id="ms_status" name="ms_status" class="form-control" data-on-color="success" data-off-color="default" value="1">
                                  <!-- Above visible checkbox, Temporary until DB is sorted -->

                                <?php /*  if($product_status == '1'){
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="ms_status" name="ms_status" class="form-control" data-on-color="success" data-off-color="default" checked value="1">';
                              } elseif($product_status == '0') {
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="ms_status" name="ms_status" class="form-control" data-on-color="success" data-off-color="default" value="0">';
                              } */ ?>

                                  <?php // echo $new_status;?>
                                </div><!-- /.input group -->                       
                              </div>

                              <div class="form-group">
                                  <label>Enable/disable Meeting Scheduling:</label>
                                  <div class="input-group">
                                  <input name="schedule_status" value="0" type="hidden">
                                  <input type="checkbox" style="opacity: 0;" id="schedule_status" name="schedule_status" class="form-control" data-on-color="success" data-off-color="default" value="1">
                                  <!-- Above visible checkbox, Temporary until DB is sorted -->

                                <?php /*  if($product_status == '1'){
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="schedule_status" name="schedule_status" class="form-control" data-on-color="success" data-off-color="default" checked value="1">';
                              } elseif($product_status == '0') {
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="schedule_status" name="schedule_status" class="form-control" data-on-color="success" data-off-color="default" value="0">';
                              } */ ?>

                                  <?php // echo $new_status;?>
                                </div><!-- /.input group -->                       
                              </div>


                              <div class="form-group">
                                  <label>Enable/disable POS:</label>
                                  <div class="input-group">
                                  <input name="pos_status" value="0" type="hidden">
                                  <input type="checkbox" style="opacity: 0;" id="pos_status" name="pos_status" class="form-control" data-on-color="success" data-off-color="default" value="1">
                                  <!-- Above visible checkbox, Temporary until DB is sorted -->

                                <?php /*  if($product_status == '1'){
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="pos_status" name="pos_status" class="form-control" data-on-color="success" data-off-color="default" checked value="1">';
                              } elseif($product_status == '0') {
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="pos_status" name="pos_status" class="form-control" data-on-color="success" data-off-color="default" value="0">';
                              } */ ?>

                                  <?php // echo $new_status;?>
                                </div><!-- /.input group -->                       
                              </div>

                              <div class="form-group">
                                  <label>Enable/disable Blog:</label>
                                  <div class="input-group">
                                  <input name="blog_status" value="0" type="hidden">
                                  <input type="checkbox" style="opacity: 0;" id="blog_status" name="blog_status" class="form-control" data-on-color="success" data-off-color="default" value="1">
                                  <!-- Above visible checkbox, Temporary until DB is sorted -->

                                <?php /*  if($product_status == '1'){
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="blog_status" name="blog_status" class="form-control" data-on-color="success" data-off-color="default" checked value="1">';
                              } elseif($product_status == '0') {
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="blog_status" name="blog_status" class="form-control" data-on-color="success" data-off-color="default" value="0">';
                              } */ ?>

                                  <?php // echo $new_status;?>
                                </div><!-- /.input group -->                       
                              </div>


                              <div class="form-group">
                                  <label>Enable/disable Chat:</label>
                                  <div class="input-group">
                                  <input name="chat_status" value="0" type="hidden">
                                  <input type="checkbox" style="opacity: 0;" id="chat_status" name="chat_status" class="form-control" data-on-color="success" data-off-color="default" value="1">
                                  <!-- Above visible checkbox, Temporary until DB is sorted -->

                                <?php /*  if($product_status == '1'){
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="chat_status" name="chat_status" class="form-control" data-on-color="success" data-off-color="default" checked value="1">';
                              } elseif($product_status == '0') {
                                $new_status = '<input type="checkbox" style="opacity: 0;" id="chat_status" name="chat_status" class="form-control" data-on-color="success" data-off-color="default" value="0">';
                              } */ ?>

                                  <?php // echo $new_status;?>
                                </div><!-- /.input group -->                       
                              </div>



                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                    </form>

                    <!-- <div class="form-group">
                      <label>Date range test:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" name="" class="form-control float-right date_range">
                      </div>
                    </div> -->

                    </div>
                  <!-- /.tab-pane -->









                  <div class="tab-pane" id="sitemap">
                <form method="post" action="" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf   

                      <input type="hidden" name="locale" value="en">
                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Sitemap Settings</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              
                              foreach autopage or manual sitemap

                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                    </form>

                    <!-- <div class="form-group">
                      <label>Date range test:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" name="" class="form-control float-right date_range">
                      </div>
                    </div> -->

                    </div>
                  <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
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
@stop

@include('layouts.backend.footer')

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <style type="text/css">
      .permission-labels {
        min-width: 170px;
      }
    </style>
@stop

@section('js')

<script type="text/javascript">
  (function($) {
    $(function() {   
      var galleries = $('.slideshowPlugin').adGallery({
        loader_image: 'vendor/ckeditor/plugins/slideshow/3rdParty/ad-gallery/loader.gif', 
        width:false, 
        height:300, 
        start_at_index: 0, 
        animation_speed: 500, 
        update_window_hash: false, 
        effect: 'fade', 
        slideshow: { 
          enable: true, 
          autostart: true, 
          start_label: 'Start', 
          stop_label: 'Stop', 
          speed: 5000,
        },
      });
    });
  })(jQuery);
</script>

<script type="text/javascript">
  CKEDITOR.replace( 'seo_keywords', {
      customConfig: '/vendor/ckeditor/config.js',
  });
  CKEDITOR.replace( 'seo_description', {
      customConfig: '/vendor/ckeditor/config.js',
  });

  /* Function Settings Start */
  $("[id='ecom_status']").bootstrapSwitch();
  $("[id='ms_status']").bootstrapSwitch();
  $("[id='schedule_status']").bootstrapSwitch();
  $("[id='pos_status']").bootstrapSwitch();
  $("[id='blog_status']").bootstrapSwitch();
  $("[id='chat_status']").bootstrapSwitch();

/* Function Settings End */
      //Enable check and uncheck all functionality
      $('.checkbox-toggle').click(function () {
        var clicks = $(this).data('clicks')
        if (clicks) {
          //Uncheck all checkboxes
          $('.user-permissions input[type=\'checkbox\']').prop('checked', false)
          $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
        } else {
          //Check all checkboxes
          $('.user-permissions input[type=\'checkbox\']').prop('checked', true)
          $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
        }
        $(this).data('clicks', !clicks)
      });
      //Enable check and uncheck all functionality
    </script>
@stop