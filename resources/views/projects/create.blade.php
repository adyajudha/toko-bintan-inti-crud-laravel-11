@extends('projects.layout')


@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Tambah Barang Baru</h2>
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
                <form action="{{ route('projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan kode barang dengan benar">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Masukkan jumlah barang">
                    </div>
                    <div class="form-group">
                        <label for="satuan_barang">Satuan Jenis Barang</label>
                        <input type="text" class="form-control" id="satuan_barang" name="satuan_barang" placeholder="30/pcs atau 6/kg">
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-3">Simpan Barang</button>
                </form>
                
            </div>
        </div>
    </div>
    
@endsection