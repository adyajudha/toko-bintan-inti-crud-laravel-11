@extends('projects.layout')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Toko Bintan Inti</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-primary" href="{{ route('projects.create') }}"> 
                    Tambahkan Barang
                </a>
            </div>
            <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <b>{{ $message }}</b>
                    </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Satuan Jenis Barang</th>
                        <th width="240px">Aksi</th>
                    </tr>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->kode_barang }}</td>
                        <td>{{ $project->nama_barang }}</td>
                        <td>{{ $project->jumlah_barang }}</td>
                        <td>{{ $project->satuan_barang }}</td>
                        <td>
                            <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                                <a
                                    class="btn btn-outline-info"
                                    href="{{ route('projects.show',$project->id) }}">
                                    Detil
                                </a>
                                <a
                                    class="btn btn-outline-success"
                                    href="{{ route('projects.edit',$project->id) }}">
                                    Ubah
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection