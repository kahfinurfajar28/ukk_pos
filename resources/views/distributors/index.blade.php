@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distributor</title>
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
                                <h2 class="h3 mb-0 page-title">Daftar Distributor</h2>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-success" href="{{ route('distributors.create') }}"> Masukan Distributor Baru</a>
                            </div>
                        </div>
                        <tr>
                            <th>No</th>
                            <th>Nama Distributor</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th width="150px">Action</th>
                        </tr>
                        @foreach ($dists as $distributors)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $distributors->nama_dis }}</td>
                                <td>{{ $distributors->alamat }}</td>
                                <td>{{ $distributors->no_telp }}</td>
                                <td>
                                    <form action="{{ route('distributors.destroy', $distributors->id) }}" method="POST">
                                        {{-- <a class="btn btn-info" href="{{ route('distributors.show', $distributors->id) }}">Show</a> --}}
                                        <a class="btn btn-primary" href="{{ route('distributors.edit', $distributors->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus {{ $distributors->nama_dis }}?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    {!! $dists->links() !!}
</div>
@endsection
