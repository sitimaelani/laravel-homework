@extends('layouts.master')
@section('title', 'pengembalian')
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
                          <li class="breadcrumb-item active">Pengembalian</li>
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
              <h3 class="card-title">Data Pengembalian</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('pengembalian.store', $anggota[0]->id, $buku[0]->id, $petugas[0]->id)}}">
              <div class="card-body">
                <div class="form-group">
                  <label for="genre">Nama Anggota</label>
                  <select name="nama_anggota" id="genre" class="form-control">
                    <option disabled selected>--Pilih Salah Satu--</option>
                      @forelse ($anggota as $key => $value )
                        <option value="{{ $value->id }}">{{ $value->nama_anggota}}</option>
                      @empty
                        <option disabled>--Data Masih Kosong--</option>
                      @endforelse 
                  </select>
                </div>
                <div class="form-group">
                  <label for="genre">Nama Buku</label>
                  <select name="id_buku" id="genre" class="form-control">
                    <option disabled selected>--Pilih Salah Satu--</option>
                      @forelse ($buku as $key => $value )
                        <option value="{{ $value->id }}">{{ $value->judul_buku}}</option>
                      @empty
                        <option disabled>--Data Masih Kosong--</option>
                      @endforelse 
                  </select>
                </div>
                <div class="form-group">
                  <label for="genre">Nama Petugas</label>
                  <select name="id_petugas" id="genre" class="form-control">
                    <option disabled selected>--Pilih Salah Satu--</option>
                      @forelse ($petugas as $key => $value )
                        <option value="{{ $value->id }}">{{ $value->nama_petugas}}</option>
                      @empty
                        <option disabled>--Data Masih Kosong--</option>
                      @endforelse 
                  </select>
                </div>
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                    <label>Tanggal Pengembalian</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="date" class="form-control" name="tanggal_pengembalian" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Denda</label>
                    <input type="text" class="form-control" name="denda" id="exampleInputPassword1" placeholder="Masukan Denda">
                </div> 
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Next</button>
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