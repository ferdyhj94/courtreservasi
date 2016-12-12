@extends('layouts.template')
@extends('layouts.sidebar')
@section('content')
    <!-- Main content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah USer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{URL('add-user')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="lapangan">Nama User</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="lapangan">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="lapangan">E-Mail</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Nama Lapangan">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="lapangan">Status</label>
                  <input type="text" class="form-control" name="status" id="status" placeholder="Status">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </section>
    <!-- /.content -->
    @endsection
      <!-- Small boxes (Stat box) -->