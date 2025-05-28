@extends('adminlte::page')

@section('title', 'N模組設置')

@include('layouts.backend.notifications')

@section('content')
    <!-- <p>Welcome to this beautiful admin panel.</p> -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-pencil-square-o"></i>模組設置</h3>
                <div class="pull-right box-tools">
                  <!-- <button type="button" class="btn-flat btn-danger save-btn" style=""><i class="fa fa-trash" data-id="1"></i> Delete Newsletter</button>  -->
<!-- Newsletter id ....data-id="" -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="post" action="{{ route('newsletter_update') }}" enctype="multipart/form-data" accept-charset="utf-8" class="form-horizontal">
                      @csrf 
                      <input type="hidden" name="locale" value="en">
                      <input type="hidden" name="id" value="{{-- $newsletters[0]->id --}}">

                <div class="row">
          <!--<div class="col-md-12">
                <button type="button" class="extra-btn btn-success saver" style="float: right; right: 0;"><i class="fa fa-save"></i></button>
            </div>-->

            

            <div class="col-md-12">
                      <div class="card-body">
                            <div class="form-group">
                              <label>模組功能名稱 :<br><small>本模組對應的功能名稱，如「電子E報」；用於顯示在網頁標題、目前的位置提示條等處</small></label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                  </span>
                                </div>
                                <input type="text" id="" name="" class="form-control" value="{{-- $newsletters[0]->nl_title --}}" placeholder="">
                              </div>
                              <!-- /.input group -->
                            </div>


                              <div class="form-group">
                                <label>是否在目前的位置提示條顯示模組功能名稱:<br><small>是否在目前的位置提示條顯示模組功能名稱</small></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="form-group">
                                <label>電子報主題圖片上傳尺寸限制(Byte):<br><small>會員發佈電子報上傳主題圖片時,單個圖片尺寸的限制</small></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="form-group">
                                <label>電子報編輯器圖片上傳限制(Byte):<br><small>會員發佈電子報時,在編輯器內上傳圖片,單個圖片的尺寸限制</small></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="form-group">
                                <label>附件上傳大小限制:<br><small>會員發佈電子報上傳附件時,允許上傳附件的文件大小;但最高設置不能超過2M</small></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                                <!-- /.input group -->
                              </div>


                              <div class="form-group">
                                <label>會員發佈電子報關鍵詞過濾:<br><small>會員發佈電子報時禁止的詞語，多個以逗號分割</small></label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <textarea class="form-control" rows="4" name="" placeholder="">{{-- $newsletters[0]->nl_content --}}</textarea>
                                </div>
                              </div><!-- /.input group --> 

                              <div class="form-group">
                                <label>伺服器登入帳號:<br><small>Cpanel 主機伺服器登入帳號</small></label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                              </div><!-- /.input group -->  

                              <div class="form-group">
                                <label>伺服器登入密碼:<br><small>Cpanel 主機伺服器登入密碼</small></label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                              </div><!-- /.input group --> 

                              <div class="form-group">
                                <label>伺服器連接埠:<br><small>伺服器連接埠，Cpanel多半為 2082 或 SSL連線的 2083</small></label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="" class="form-control" value="" placeholder="">
                                </div>
                              </div><!-- /.input group --> 

                              <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="button" class="btn btn-success btn-flat">Save</button>
                                </div>
                              </div>



                              </div>

                              
                      </div><!--box-body-->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    
@stop

@section('footer')
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0
  </div>
  <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#" target="_blank"> Company Name</a>.</strong> All rights reserved.
</footer>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    <script type="text/javascript">
      // CKEDITOR.replace( 'p', {
      //     customConfig: '/vendor/ckeditor/config.js',
      // });
      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
      $(function () {
        $('.datepicker').datetimepicker({
            format: 'YYYY/MM/DD'
          });
      });
      $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 3
      });
    </script>
@stop