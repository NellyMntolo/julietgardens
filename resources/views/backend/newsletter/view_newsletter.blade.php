@extends('adminlte::page')

@section('title', 'Newsletter')

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
                <h3 class="card-title"><i class="fa fa-pencil-square-o"></i> 電子報修改</h3>
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
                      <input type="hidden" name="id" value="{{ $newsletters[0]->id }}">

                <div class="row">
          <!--<div class="col-md-12">
                <button type="button" class="extra-btn btn-success saver" style="float: right; right: 0;"><i class="fa fa-save"></i></button>
            </div>-->

            

            <div class="col-md-12">
                      <div class="card-body">
                            <div class="form-group">
                              <label>電子報分類: <!-- Newsletter Classification --> {{-- $newsletters[0]->locale --}} </label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-fw fa-group faa-wrench animated faa-slow"></i>
                                  </span>
                                </div>
                                <select name="nl_classification" class="form-control custom-select" data-width="50%">
                                    <!-- <option value="1">REMA 電子報</option> -->
                                    <option value="REMA 電子報">{{ $newsletters[0]->nl_classification }}</option>
                                    <?php //  echo $all_groups;?>
                                </select>
                              </div>
                              <!-- /.input group -->
                            </div>


                              <div class="form-group">
                                <label>電子報標題: <!-- Newsletter Title --></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-pencil-square-o faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="nl_title" class="form-control" value="{{ $newsletters[0]->nl_title }}" placeholder="電子報標題">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="form-group with-border">
                                <label>電子報內容: <!-- Product Description --></label>
                                <div class="input-group">
                                <textarea id="p" class="form-control" rows="3" name="nl_content" placeholder="電子報內容">{{ $newsletters[0]->nl_content }}</textarea>
                              </div><!-- /.input group -->                      
                              </div>

                            <?php //  echo "<script>CKEDITOR.instances.p.setData('".mysql_real_escape_string($product_description, $conn)."')</script>"; ?>

                              <div class="form-group">
                                <label>電子報作者: <!-- Newsletter author --></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-user faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="nl_author" class="form-control" value="{{ $newsletters[0]->nl_author }}" placeholder="電子報作者">
                                </div>
                                <!-- /.input group -->
                              </div>

                              <div class="form-group">
                                <label>發佈時間: <!-- Release Time --></label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-clock faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="nl_release" class="form-control datepicker" value="{{ $newsletters[0]->nl_release }}" placeholder="發佈時間">
                                </div>
                                <!-- /.input group -->
                              </div>


                              <div class="form-group">
                                <label>更新時間:<!-- Update Time --></label>
                                <div class="input-group">
                                <?php //  echo $new_status;?>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-fw fa-clock faa-wrench animated faa-slow"></i>
                                    </span>
                                  </div>
                                  <input type="text" id="" name="nl_update" class="form-control" value="{{ $newsletters[0]->updated_at }}" placeholder="更新時間" disabled >
                                </div>
                              </div><!-- /.input group -->    

                              <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-success btn-flat">Save</button>
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
      CKEDITOR.replace( 'p', {
          customConfig: '/vendor/ckeditor/config.js',
      });
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