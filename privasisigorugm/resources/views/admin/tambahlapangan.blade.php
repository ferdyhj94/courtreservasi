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
              <h3 class="box-title">Tambah Lapangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{URL('tbh-lapangan')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="lapangan">Nama Lapangan</label>
                  <input type="text" class="form-control" name="nama_lapangan" id="nama_lapangan" placeholder="Nama Lapangan">
                </div>
              </div>
              
                <div class="form-group">
                  <label>Jenis Lapangan</label>
                  <select name="jenis_lapangan" class="form-control">
                  <option value="1">Lapangan Badminton</option>
                  <option value="2">Lapangan Tenis</option>
                  </select>
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