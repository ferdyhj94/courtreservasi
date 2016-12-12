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
              <h3 class="box-title">User Member</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <a href="{{ URL('tambah-admin') }}"><button class="btn btn-primary">Tambah</button></a>
          @if(Session::has('message'))
          <span class="label label-success">{{$Session::get('message')}}</span>
@endif
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama </th>
                  <th>Username</th>
                  <th>E-Mail</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                  ?>
                  @foreach ($users as $data)
                  <tr>
                    
                    <td>{{$no++}}</td>
                    <td>{{$data->nama_petugas}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->status}} </td>
                    <td><a href=""><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                    <td><a href=""><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                  </tr>
                           @endforeach 
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama </th>
                  <th>Username</th>
                  <th>E-Mail</th>
                  <th>Status</th>
                  <th>Aksi</th>
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