@extends('layouts.master')
@section('title', 'peminjaman')
    @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0"></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Peminjaman</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title">Data Peminjaman</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('get_buku')}}">
              <div class="card-body">
                <div class="form-group">
                  <label for="id">Id Peminjaman</label>
                  <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan Id">
                </div>
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" name="tglpjm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Kembali</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" name="tglkbl" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Id Buku</label>
                  <input type="text" class="form-control" name="id_buku" id="exampleInputPassword1" placeholder="Masukan Id">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Id Anggota</label>
                    <input type="text" class="form-control" name="id_buku" id="exampleInputPassword1" placeholder="Masukan Id">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Id Petugas</label>
                    <input type="text" class="form-control" name="id_petugas" id="exampleInputPassword1" placeholder="Masukan Id">
                </div>  
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Next</button>
              </div>
            </form>
          </div>
    @endsection 