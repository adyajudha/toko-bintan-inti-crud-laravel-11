@extends('projects.layout')
  
  
@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Create New Project</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-info float-right" href="{{ route('projects.index') }}"> 
                    View All Projects
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
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang">
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-3">Save Project</button>
                </form>
                
            </div>
        </div>
    </div>
    
@endsection