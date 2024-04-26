@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
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
                                <h2 class="h3 mb-0 page-title">Pelanggan</h2>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-success" href="{{ route('penggunas.create') }}"> Masukan User Baru</a>
                            </div>
                        </div>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th width="180px">Action</th>
                        </tr>
                        @foreach ($penggunas as $pengguna)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $pengguna->name }}</td>
                                <td>{{ $pengguna->alamat }}</td>
                                <td>{{ $pengguna->tlp }}</td>
                                <td>
                                    <form action="{{ route('penggunas.destroy', $pengguna->id) }}" method="POST">
                                        {{-- <a class="btn btn-info" href="{{ route('penggunas.show', $pengguna->id) }}">Show</a> --}}
                                        <a class="btn btn-primary" href="{{ route('penggunas.edit', $pengguna->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus {{ $pengguna->name  }}?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    {!! $penggunas->links() !!}
</div>
@endsection
