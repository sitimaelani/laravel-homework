@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('Template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

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
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data Petugas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>nomor</th>
                      <th>nama petugas</th>
                      <th>jabatan petugas</th>
                      <th>no telpon</th>
                      <th>alamat petugas</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                        @forelse ($operators as $key => $values)
                        <form action="{{route ('petugas.destroy', $values->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $values->nama_petugas}}</td>
                            <td>{{ $values->jabatan}}</td>
                            <td>{{ $values->no_telpon}}</td>
                            <td>{{ $values->alamat_petugas}}</td>
                            <td>
                                <a href="{{route('petugas.show', $values->id)}}" class="btn-sm btn-info">show</a>
                                <a href="{{route('petugas.edit', $values->id)}}" class="btn-sm btn-warning">edit</a>
                                <button type="submit" class="btn-sm btn-danger">delete</button>
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
                <!-- /.card footer -->
                <div class="card-footer">
                  <div class="row justify-content-between">
                    <div class="col-3">
                      <a class="btn btn-primary" href="{{route('petugas.create')}}" role="button"> + petugas </a>
                  </div>
                  <div class="col-3">
                      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                          <ul class="pagination">
                              <li class="paginate_button page-item previous disabled" id="example2_previous"><a
                                      href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                      class="page-link">Previous</a></li>
                              <li class="paginate_button page-item "><a href="{{route('anggota.index')}}"
                                      aria-controls="example2" data-dt-idx="1" tabindex="0"
                                      class="page-link">1</a></li>
                              <li class="paginate_button page-item active"><a href="{{route('petugas.index')}}"
                                      aria-controls="example2" data-dt-idx="1" tabindex="0"
                                      class="page-link">2</a></li>
                              <li class="paginate_button page-item next disabled" id="example2_next"><a
                                      href="#" aria-controls="example2" data-dt-idx="2" tabindex="0"
                                      class="page-link">Next</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>
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

