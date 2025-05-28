@extends('adminlte::page')


@section('title', 'Our Locations')

@include('layouts.backend.notifications')

@section('content')

<section class="content">

  <form method="post" action="{{-- route('our_locations_update') --}}" enctype="multipart/form-data" accept-charset="utf-8">
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
                   Our Locations{{-- $rema_founded[0]->locale --}}
                </h3>
              </div>
              <div class="card-body">

                    <table id="admin_maintainance_table" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>選擇</th>
                        <th>編號</th>
                        <th>題圖</th>
                        <th>文章標題</th>
                        <th>文章分類</th>
                        <th>發佈人</th>
                        <th>發佈時間 </th>
                        <th>審核</th>
                        <th>推薦</th>
                        <th>粗體 </th>
                        <th>權限</th>
                        <th>序號</th>
                        <th>更新</th>
                        <th>修改</th>
 
  
<!-- choose -->
<!-- serial number -->
<!-- Title map -->
<!-- Article title -->
<!-- Article classification -->
<!-- publisher  -->
<!-- release time   -->
<!-- Audit -->
<!-- recommend  -->
<!-- Bold -->
<!-- Authority -->
<!-- Serial number -->
<!-- renew  -->
<!-- Revise -->
                      </tr>
                      </thead>
                      <tbody>
                        <form>
                          @csrf
                          <!-- <tr>
                            <td><input type="text" name="" class="form-control"></td>
                            <td><input type="text" name="" class="form-control"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input type="text" name="" class="form-control"></td>
                            <td><input type="text" name="" class="form-control"></td>
                            <td><input type="text" name="" class="form-control"></td>
                            <td><a href="#" class="btn btn-success"><i class="fas fa-fw fa-check"></i></a></td>
                            <td><a href="#" class="btn btn-danger"><i class="fas fa-fw fa-times"></i></a></td>
                          </tr> -->
                        </form>

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

    <?php //echo $footer; ?>

          <!-- <footer class="main-footer" style="margin: 0px">
            <div class="float-right d-none d-sm-block">
              <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#" target="_blank"> Company Name</a>.</strong> All rights reserved.
          </footer> -->
@stop

@include('layouts.backend.footer')

@section('css')
@stop

@section('js')
@stop