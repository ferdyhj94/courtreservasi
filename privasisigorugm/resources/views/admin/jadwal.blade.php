@extends('layouts.template')
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
              <h3 class="box-title">Lapangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <a href="{{ URL('tambah-lapangan') }}">
              <button class="btn btn-primary">Tambah</button></a>
          @if(Session::has('message'))
          <span class="label label-success">{{$Session::get('message')}}</span>
@endif
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Lapangan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lapangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                  ?>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Lapangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
    </section>
    <!-- /.content -->
    @endsection
      <!-- Small boxes (Stat box) -->