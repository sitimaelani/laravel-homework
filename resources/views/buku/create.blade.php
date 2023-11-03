@extends('layouts.master')
@section('title', 'buku')
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
                          <li class="breadcrumb-item active">Buku</li>
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
              <h3 class="card-title">Data Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('buku.store') }}" method="POST" >
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Buku</label>
                  <input type="text" class="form-control" name="kode_buku" id="exampleInputPassword1" placeholder="Masukan Kode">
                </div>
                <div class="form-group">
                  <label for="rak_id">Nama rak</label>
                  <select name="rak_id" id="rak_id" class="form-control">
                    <option disabled selected>--Pilih Salah Satu--</option>
                      @forelse ($raks as $key => $value )
                        <option value="{{ $value->id }}">{{ $value->nama_rak }}</option>
                      @empty
                        <option disabled>--Data Masih Kosong--</option>
                      @endforelse 
                      {{-- ($casts as $key => $value) --}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" class="form-control" name="judul_buku" id="exampleInputPassword1" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penulis</label>
                  <input type="text" class="form-control" name="penulis_buku" id="exampleInputPassword1" placeholder="Masukan Kode">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penerbit</label>
                  <input type="text" class="form-control" name="penerbit_buku" id="exampleInputPassword1" placeholder="Masukan Nama">
                </div>

              <!-- Date dd/mm/yyyy -->
               <div class="form-group">
                  <label>Tahun Terbit</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" name="tahun_penerbit" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
              </div>

              <!-- Stok -->
              <div class="form-group">
                  <label>Stok</label>
                  <input type="number" class="form-control" name="stok_buku" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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