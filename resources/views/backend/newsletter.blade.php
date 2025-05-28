@extends('adminlte::page')

@section('title', 'News Letter')

@include('layouts.backend.notifications')

@section('content')
    <p>News Letter</p>

    <section class="content">
  <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data" accept-charset="utf-8">
    @csrf
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable News Letters</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Locale</th>
                    <th>User Email</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($newsletters as $newsletter) {
                      // echo $value->name;
                      echo '<tr>
                              <td>'.$newsletter->id.'</td>
                              <td>'.$newsletter->locale.'</td>
                              <td>'.$newsletter->user_email.'</td>
                            </tr>';
                    }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <!-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th> -->
                  </tr>
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
      </div><!-- /.container-fluid -->
    </section>
  </form>
@stop

@include('layouts.backend.footer')
@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script defer>
  $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@stop