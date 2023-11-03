@extends('layouts.master')
@section('title', 'welcome')
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
                                <li class="breadcrumb-item"><a href="#"></a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
    <section class="content">
        <div class="error-page">
          <br>
          <br>
          <br>
          <br>
          <br>
          

          <div class="text-center">
            <h1><b>Perpustakaan</b></h1>
            <a href="{{ route('peminjaman.create')}}" class="btn btn-primary ">Peminjaman</a>
            <a href="{{ route('pengembalian.create')}}" class="btn btn-primary ">Pengembalian</a>

          </div>
        </div>
        <!-- /.error-page -->
  
      </section>
            <!-- /.content -->
        </div>
@endsection