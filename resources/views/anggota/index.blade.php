@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('Template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Perpustakaan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>no</th>
                      <th>kode anggota</th>
                      <th>nama anggota</th>
                      <th>jk anggota</th>
                      <th>jurusan anggota</th>
                      <th>no telpon</th>
                      <th>alamat</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                        @forelse ($members as $key => $values)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $values->kode_anggota}}</td>
                            <td>{{ $values->nama_anggota}}</td>
                            <td>{{ $values->jk_anggota}}</td>
                            <td>{{ $values->jurusan_anggota}}</td>
                            <td>{{ $values->no_telpon}}</td>
                            <td>{{ $values->alamat_anggota}}</td>
                            <td>
                                <a href="#" class="btn-sm btn-info">show</a>
                                <a href="#" class="btn-sm btn-warning">edit</a>
                                <a href="#" class="btn-sm btn-danger">delete</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td>Data masih kosong</td>
                            </tr>
                        @endforelse
                    <tfoot>
                    </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                

@endsection

@push('script')
<script src="{{asset ('Template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset ('Template/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset ('Template/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset ('Template/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset ('Template/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush

