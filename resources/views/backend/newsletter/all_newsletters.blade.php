@extends('adminlte::page')

@section('title', 'All Newsletters')

@include('layouts.backend.notifications')

@section('content')
    <!-- <p>Welcome to this beautiful admin panel.</p> -->

    <?php 
    foreach ($newsletters as $newsletter) { ?>
      
    
    <!-- Modal -->
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $newsletter->nl_title }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="table_modal_image" src="/images/rema.jpg">
            <img class="table_modal_image" src="{{ $newsletter->nl_title }}">
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
  <?php } ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <!-- <a class="btn btn-success btn-sm btn-flat" href="/admin/newsletter/new" style="float: right;">Add New Newsletter</a> -->
                <a class="btn btn-success btn-sm btn-flat" href="{{ route('newsletter_new') }}" style="float: right;">Add New Newsletter</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <table id="allnewsletter" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>選擇 <!-- choose   --> {{-- $newsletters[0]->locale --}} </th>
                    <th>編號 <!-- serial number  --></th>
                    <th>題圖 <!-- Title map --></th>
                    <th>電子報標題 <!-- Newsletter title --></th>
                    <th>電子報分類 <!-- Newsletter classification --></th>
                    <th>發佈人 <!-- publisher --></th>
                    <th>發佈時間 <!-- release time --></th>
                    <th>審核 <!-- Audit --></th>
                    <th>推薦 <!-- recommend  --></th>
                    {{-- <th>粗體 <!-- Bold --></th>
                    <th>權限 <!-- Authority --></th> --}}
                    <th>送出 <!-- Send out --></th>
                    <th>修改 <!-- Revise --></th>
                    <th>更新 <!-- renew --></th>
                  </tr>
                  </thead>
                  <tbody>

                    
                      <?php 
                      // 'id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'updated_at'

                      foreach ($newsletters as $newsletter) {
                        # code...
                        echo '<tr>
                                  <td><input type="checkbox" name="" class="table_checkbox"></td>
                                  <td style="text-align: center">'.$newsletter->id.'</td>
                                  <td><li><a href="#" data-toggle="modal" data-target="#image_Modal"><img class="img-circle img-bordered-sm table_image" src="/images/default_person.png" alt="View Image"></a></li></td>
                                  <td class="col-sm-3" style="text-align: center;">'.$newsletter->nl_title.'</td>
                                  <td class="col-sm-1">'.$newsletter->nl_classification.'</td>
                                  <td>'.$newsletter->nl_author.'</td>
                                  <td>'.$newsletter->nl_release.'</td><!-- or created_at -->
                                  <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                                  <!-- <td><span style="font-size: 20px; color: #dc3545;"><i class="fas fa-fw fa-times"></i></span></td>
                                  <td><span style="font-size: 20px; color: #dc3545;"><i class="fas fa-fw fa-times"></i></span></td> -->
                                  <td>0</td>
                                  <td><a href="#" class="btn btn-success btn-flat"><i class="fas fa-fw fa-envelope"></i></a></td>
                                  <td><a href="#" class="btn btn-success btn-flat" onclick="window.reload();"><i class="fas fa-fw fa-redo"></i></a></td>
                                  <td><a href="/admin/newsletter/'.$newsletter->id.'" class="btn btn-warning btn-flat"><i class="fas fa-fw fa-eye"></i></a></td>
                              </tr>';

                      }

                      ?>
                      <!-- <td><input type="checkbox" name="" class="table_checkbox"></td>
                      <td style="text-align: center">555</td>
                      <td><li><a href="#" data-toggle="modal" data-target="#image_Modal"><img class="img-circle img-bordered-sm table_image" src="/images/default_person.png" alt="View Image"></a></li></td>
                      <td class="col-sm-3" style="text-align: center;">濕冷季節必備裝備| 防潑水機能運動長褲</td>
                      <td class="col-sm-1">REMA 電子報</td>
                      <td>王伶妃</td>
                      <td>21/10/22 </td>
                      <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      <td><span style="font-size: 20px; color: #dc3545;"><i class="fas fa-fw fa-times"></i></span></td>
                      <td><span style="font-size: 20px; color: #dc3545;"><i class="fas fa-fw fa-times"></i></span></td>
                      <td>0</td>
                      <td><a href="#" class="btn btn-success"><i class="fas fa-fw fa-envelope"></i></a></td>
                      <td><a href="#" class="btn btn-success"><i class="fas fa-fw fa-redo"></i></a></td>
                      <td><a href="/admin/newsletter/{id}" class="btn btn-danger"><i class="fas fa-fw fa-eye"></i></a></td> -->
                  
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Language Code</th>
                    <th>Language name</th>
                    <th>Current status</th>
                    <th>Default Language</th>
                    <th>Active Languages</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->

    
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
    <!-- <script type="text/javascript" src="/js/backend.js"></script> -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script type="text/javascript">
    /* 
    elements are retrieved by .class or letter
    "dom": "Bfrltip",
    "dom": '<"toolbar">frtip',
    */
      $("#allnewsletter").DataTable({
        "paging": true,
        // "dom": '<"toolbar"><"newproduct">Bfrltip',
      });
      // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
      // $('#allproducts_filter').append('<a href="/admin/products/{id}" class="btn btn-success pull-right" style="margin-left: 3px;"><i class="fas fa-fw fa-plus"><!-- 發佈商品 add new? publush goods --></a>');
      //$("div.newproduct").html('<a href="#" class="btn btn-success pull-right" style="margin-left: 3px;"><i class="fas fa-fw fa-plus"><!-- 發佈商品 add new? publush goods --></a> ');

    </script>
@stop