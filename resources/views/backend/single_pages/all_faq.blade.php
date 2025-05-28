@extends('adminlte::page')

@section('title', 'FAQ')

@include('layouts.backend.notifications')

@section('content')
    <!-- <p>Welcome to this beautiful admin panel.</p> -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <a class="btn btn-success btn-sm btn-flat" href="/admin/faq_new" style="float: right;">Add New FAQ</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <table id="allproducts" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Faq Title</th>
                    <th>View</th>

                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    foreach ($faq as $the_faq ) {
                       // code...
                      echo '<tr>
                              <td>'.$the_faq->id.'</td>
                              <td>'.$the_faq->faq_title.'</td>                              
                              <td><a href="/admin/faq_view/'.$the_faq->id.'" class="btn btn-success btn-flat" name="faq_id"><i class="fas fa-fw fa-eye"></i></a>
                              </td>
                          </tr>';
                     } 
                    ?>

                    <!-- <tr>
                        <td>Clothing</td>
                        <td>Q234A6789</td>
                        <td><a href="/admin/faq" class="btn btn-success btn-flat"><i class="fas fa-fw fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td>Clothing</td>
                        <td>Q234A6789</td>
                        <td><a href="/admin/faq" class="btn btn-success btn-flat"><i class="fas fa-fw fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td>Clothing</td>
                        <td>Q234A6789</td>
                        <td><a href="/admin/faq" class="btn btn-success btn-flat"><i class="fas fa-fw fa-eye"></i></a></td>
                    </tr>

                    <tr>
                        <td>Clothing</td>
                        <td>Q234A6789</td>
                        <td><a href="/admin/faq" class="btn btn-success btn-flat"><i class="fas fa-fw fa-eye"></i></a></td>
                    </tr> -->
                  
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
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->

    
@stop

@include('layouts.backend.footer')

@section('css')
@stop

@section('js')
    
@stop