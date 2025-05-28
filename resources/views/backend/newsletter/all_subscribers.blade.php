@extends('adminlte::page')

@section('title', 'All Subscribers')

@include('layouts.backend.notifications')

@section('content')
    <!-- <p>Welcome to this beautiful admin panel.</p> -->

    <?php 
    /*
    foreach ($subscribers as $subscriber) { ?>
      
    
    <!-- Modal -->
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{-- $subscriber->nl_title --}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="table_modal_image" src="/images/rema.jpg">
            <img class="table_modal_image" src="{{-- $subscriber->nl_title --}}">
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
  <?php }

  */ ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <!-- <a class="btn btn-success btn-sm btn-flat" href="/admin/subscriber/new" style="float: right;">Add New subscriber</a> -->
                <a class="btn btn-success btn-sm btn-flat" href="{{-- route('subscriber_new') --}}" style="float: right;">Import All Subscribers <!-- automated --></a>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <table id="allsubscribers" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>選擇 <!-- choose   --> {{-- $subscribers[0]->locale --}} </th>
                    <th>編號 <!-- serial number  --></th>
                    <th>會員身份 <!-- VIP --> </th>
                    <th>會員類型 <!-- Type of membership --> </th>
                    <th>電子信箱 <!-- email --> </th>
                    <th>更新時間 <!-- Update time --> </th>
                    <th>訂閱 <!-- subscription --> </th>

                  </tr>
                  </thead>
                  <tbody>

                    
                      <?php 
                      // 'id', 'locale', 'nl_classification', 'nl_title', 'nl_content', 'nl_author', 'nl_release', 'nl_update', 'updated_at'

                      /*

                      foreach ($subscribers as $subscriber) {
                        # code...
                        echo '<tr>
                                  <td><input type="checkbox" name="" class="table_checkbox"></td>
                                  <td style="text-align: center">'.$subscriber->id.'</td>
                                  <td><li><a href="#" data-toggle="modal" data-target="#image_Modal"><img class="img-circle img-bordered-sm table_image" src="/images/default_person.png" alt="View Image"></a></li></td>
                                  <td class="col-sm-3" style="text-align: center;">'.$subscriber->nl_title.'</td>
                                  <td class="col-sm-1">'.$subscriber->nl_classification.'</td>
                                  <td>'.$subscriber->nl_author.'</td>
                                  <td>'.$subscriber->nl_release.'</td><!-- or created_at -->
                                  <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                                  <!-- <td><span style="font-size: 20px; color: #dc3545;"><i class="fas fa-fw fa-times"></i></span></td>
                                  <td><span style="font-size: 20px; color: #dc3545;"><i class="fas fa-fw fa-times"></i></span></td> -->
                                  <td>0</td>
                                  <td><a href="#" class="btn btn-success btn-flat"><i class="fas fa-fw fa-envelope"></i></a></td>
                                  <td><a href="#" class="btn btn-success btn-flat" onclick="window.reload();"><i class="fas fa-fw fa-redo"></i></a></td>
                                  <td><a href="/admin/subscriber/'.$subscriber->id.'" class="btn btn-warning btn-flat"><i class="fas fa-fw fa-eye"></i></a></td>
                              </tr>';

                      }

                      */

                      ?>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" name="" class="table_checkbox"></td>
                        <td style="text-align: center">555</td>
                        <td>VIP</td>
                        <td>type of membership</td>
                        <td>email</td>
                        <td>21/10/22 </td>
                        <td><span style="font-size: 20px; color: #1e7e34;"><i class="fas fa-fw fa-check"></i></span></td>
                      </tr>

                  
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
      $("#allsubscribers").DataTable({
        "paging": true,
        // "dom": '<"toolbar"><"newproduct">Bfrltip',
      });
      // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
      // $('#allproducts_filter').append('<a href="/admin/products/{id}" class="btn btn-success pull-right" style="margin-left: 3px;"><i class="fas fa-fw fa-plus"><!-- 發佈商品 add new? publush goods --></a>');
      //$("div.newproduct").html('<a href="#" class="btn btn-success pull-right" style="margin-left: 3px;"><i class="fas fa-fw fa-plus"><!-- 發佈商品 add new? publush goods --></a> ');

    </script>
@stop