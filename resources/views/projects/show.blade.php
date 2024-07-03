@extends('projects.layout')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Lihat Barang</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-info float-right" href="{{ route('projects.index') }}"> 
                    Kembali
                </a>
            </div>
            <div class="card-body">
                <b class="text-muted">Kode Barang:</b>
                <p>{{$project->kode_barang}}</p>
                <b class="text-muted">Nama Barang:</b>
                <p>{{$project->nama_barang}}</p>
                <b class="text-muted">Jumlah Barang:</b>
                <p>{{$project->jumlah_barang}}</p>
                <b class="text-muted">Satuan Jenis Barang:</b>
                <p>{{$project->satuan_barang}}</p>
            </div>
        </div>
    </div>
@endsection