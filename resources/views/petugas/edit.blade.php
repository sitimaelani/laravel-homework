@extends('layouts.master')
@section('title', 'petugas')
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
                          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                          <li class="breadcrumb-item active">Petugas</li>
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
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Data Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('petugas.update', $operators[0]->id)}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Petugas</label>
                  <input type="text" class="form-control @error('nama_petugas') is-invalid @enderror" name="nama_petugas" 
                    id="exampleInputPassword1" placeholder="Masukan Nama" value="{{$operators[0]->nama_petugas}}">
                </div>
                @error('nama_petugas')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" 
                    id="exampleInputPassword1" placeholder="Masukan Jabatan" value="{{$operators[0]->jabatan}}">
                </div>
                @error('jabatan')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <div class="form-group">
                <label>No Telpon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" 
                    data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{$operators[0]->no_telpon}}">
                </div>
                @error('no_telpon')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <!-- textarea -->
                <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control @error('alamat_petugas') is-invalid @enderror" rows="3" name="alamat_petugas" 
                        placeholder="Masukan alamat">{{$operators[0]->alamat_petugas}}</textarea>
                    </div>
                  </div>
                  @error('alamat_petugas')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
              <div class="card-footer">
                <button type="update" class="btn btn-warning">update</button>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </section>
  </div>
    
    @endsection 