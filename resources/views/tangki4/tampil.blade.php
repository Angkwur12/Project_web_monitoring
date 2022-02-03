@extends('index')

@section('content')
    <!-- /. START PAGE CONTENT  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Riwayat <small>Data Tangki D</small>
                    </h1>
                </div>
            </div>
        
       
        <!-- /. START TABLE  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/tangki_d/tambah" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pengecekan</th>
                                        <th>Tinggi Cairan <sup>m</sup></th>
                                        <th>Volume Cairan <sup>m<sup>3</sup></sup></th>
                                        <th>Suhu Cairan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tangki4 as $e)
                                    <tr class="odd gradeX">
                                        <td>{{ $e->tanggal_cek }}</td>
                                        <td>{{ $e->tinggi_cairan }}</td>
                                        <td>{{ $e->volume_cairan }}</td>
                                        <td class="center">{{ $e->suhu_cairan }}</td>
                                        <td class="center">                                            
                                            <a href="/tangki_d/edit/{{ $e -> id }}" class="btn btn-warning btn-sm">Edit</a>
                                            |
                                            <a href="/tangki_d/hapus/{{ $e -> id }}" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. END TABLE  -->
        

    </div>               
    <!-- /. END PAGE CONTENT  -->
@endsection