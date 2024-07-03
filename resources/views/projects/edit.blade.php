@extends('projects.layout')
  
  
@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Ubah Barang</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-info float-right" href="{{ route('projects.index') }}"> 
                    Lihat Barang
                </a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('projects.update',$project->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $project->kode_barang }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">{{ $project->nama_barang }}
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang">{{ $project->jumlah_barang }}
                    </div>
                    <div class="form-group">
                        <label for="satuan_barang">Satuan Jenis Barang</label>
                        <input type="text" class="form-control" id="satuan_barang" name="satuan_barang">{{ $project->satuan_barang }}
                    </div>
                    <button type="submit" class="btn btn-outline-success mt-3">Simpan</button>
                </form>
                
            </div>
        </div>
    </div>
    
  
  
@endsection