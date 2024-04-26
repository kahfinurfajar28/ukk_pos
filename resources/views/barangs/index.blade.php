@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>

<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table datatables" id="dataTable-1">
                        <div class="row align-item-center my-4">
                            <div class="col">
                                <h2 class="h3 mb-0 page-title">Data Barang</h2>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-success" href="{{ route('barangs.create') }}"> Masukan Barang Baru</a>
                            </div>
                        </div>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama Merek</th>
                            <th>Nama Distributor</th>
                            <th>Harga Jual</th>
                            <th>Harga Distributor</th>
                            <th width="">Jumlah Stok</th>
                            <th width="">Kategori</th>
                            <th width="">Waktu Masuk</th>
                            <th width="160px">Action</th>
                        </tr>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $barang->nama_bar }}</td>
                                <td>{{ $barang->merek }}</td>
                                <td>{{ $barang->nama_dis }}</td>
                                <td>{{ $barang->harga_bar }}</td>
                                <td>{{ $barang->harga_bel }}</td>
                                <td>{{ $barang->stok }}</td>
                                <td>{{ $barang->kategori }}</td>
                                <td>{{ $barang->waktu }}</td>
                                <td>
                                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST">
                                        {{-- <a class="btn btn-info" href="{{ route('barangs.show', $barang->id) }}">Show</a> --}}
                                        <a class="btn btn-primary" href="{{ route('barangs.edit', $barang->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus {{ $barang->nama_bar }}?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    {!! $barangs->links() !!}
</div>
@endsection
