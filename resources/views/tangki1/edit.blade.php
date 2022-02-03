@extends('index')

@section('content')
    <!-- /. START PAGE CONTENT  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Riwayat <small>Data Tangki A</small>
                    </h1>
                </div>
            </div>
        
       
        <!-- /. START TABLE  -->
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Advanced Tables
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif
                                    @foreach($tangki1 as $e)
                                    <form action="/tangki_a/edit/proses/{{ $e -> id }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tanggal Pengecekan</label>
                                                    <input type="date" name="tanggal_cek" class="form-control" value="{{ $e->tanggal_cek }}" required="required">
                                                </div>
                                            </div>                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tinggi cairan <sup>m</sup></label>
                                                    <input type= "text" name="tinggi_cairan" class="form-control" value="{{ $e->tinggi_cairan }}" required="required"></input>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Volume Cairan <sup>m<sup>3</sup></sup></label>
                                                    <input type="text" name="volume_cairan" class="form-control" value="{{ $e->volume_cairan }}" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Suhu Cairan <sup><sup>o</sup></sup><sup>C</sup></label>
                                                    <input type="text" name="suhu_cairan" class="form-control" value="{{ $e->suhu_cairan }}" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12" align="right">
                                                <button type="submit" class="btn btn-warning">edit</button>
                                                <a href="/tangki_a" class="btn btn-secondary">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
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