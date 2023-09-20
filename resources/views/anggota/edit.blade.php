@extends('layouts.master')
@section('title', 'anggota')
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
                          <li class="breadcrumb-item active">Anggota</li>
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
              <h3 class="card-title">Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('anggota.update', $members[0]->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" class="form-control @error('kode_anggota') is-invalid @enderror" name="kode_anggota" id="exampleInputPassword1" placeholder="Masukan Kode" value="{{$members[0]->kode_anggota}}">
                </div>
                @error('kode_anggota')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <div class="form-group">
                  <label for="nama_anggota">Nama</label>
                  <input type="text" class="form-control @error('nama_anggota') is-invalid @enderror" name="nama_anggota" id="exampleInputPassword1" placeholder="Masukan Nama" value="{{$members[0]->nama_anggota}}">
                </div>
                @error('nama_anggota')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input @error('jk_anggota') is-invalid @enderror" type="radio" id="customRadio1" value="L" name="jk_anggota">
                        <label for="customRadio1" class="custom-control-label">Laki-laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input @error('jk_anggota') is-invalid @enderror" type="radio" id="customRadio2" value="P" name="jk_anggota">
                        <label for="customRadio2" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                      @error('jk_anggota')
                        <div class="alert alert-danger">{{$message}}</div> 
                      @enderror
                <div class="form-group">
                      <label>Jurusan</label>
                      <select class="custom-select @error('jurusan_anggota') is-invalid @enderror" name="jurusan_anggota">
                      <option selected disabled >{{$members[0]->jurusan_anggota}}</option>
                      <option>RPL</option>
                      <option>DPIB</option>
                      <option>TP</option>
                      <option>TFLM</option>
                      <option>TEI</option>
                      <option>TITL</option>
                      <option>TKJ</option>
                      </select>
                </div>
                @error('jurusan_anggota')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <div class="form-group">
                <label>No Telpon</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="number" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ $members[0]->no_telpon}}" data-inputmask='"mask": "(999) 999-9999"' data-mask >
                </div>
                @error('no_telpon')
                    <div class="alert alert-danger">{{$message}}</div> 
                @enderror
                <!-- textarea -->
                <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control @error('alamat_anggota') is-invalid @enderror" rows="3" name="alamat_anggota" placeholder="Masukan alamat">{{ $members[0]->alamat_anggota}}</textarea>
                    </div>
                  </div>
                  @error('alamat_anggota')
                    <div class="alert alert-danger">{{$message}}</div> 
                  @enderror
              <!-- /.card-body -->

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