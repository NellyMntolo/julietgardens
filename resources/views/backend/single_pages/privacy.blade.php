@extends('adminlte::page')

@section('title', 'Privacy')

@include('layouts.backend.notifications')

@section('content')

<section class="content">
  <form method="post" action="{{ route('privacy_update') }}" enctype="multipart/form-data" accept-charset="utf-8">
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
                  Terms & Conditions {{-- $privacy[0]->locale --}}
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">
                    
                    <textarea id="terms" name="terms_conditions" required>{{ $privacy[0]->terms_conditions }}</textarea>

                  </div>
                  
                </div><br>
                
            </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->

        <div class="row">
          <div class="col-md-12">
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card card-solid card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Privacy {{-- $privacy[0]->locale --}}
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-12">
                    
                    <textarea id="privacy" name="privacy_editor" required>{{ $privacy[0]->privacy_editor }}</textarea>

                  </div>
                  
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <button id="save_privacy" type="submit" class="btn btn-success btn-flat pull-right">Save</button>
                  </div>
                </div>
                
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
@stop

@section('js')
  <script>
      CKEDITOR.replace( 'privacy' );
      CKEDITOR.replace( 'terms' );
  </script> 
@stop