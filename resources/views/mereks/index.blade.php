@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merek</title>
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
                            <h2 class="h3 mb-0 page-title">Daftar Merek</h2>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-success" href="{{ route('mereks.create') }}"> Masukan Merek Baru</a>
                        </div>
                    </div>
                    <tr>
                        <th>No</th>
                        <th>Nama Merek</th>
                        <th width="150px">Action</th>
                    </tr>
                    @foreach ($mereks as $merek)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $merek->nama }}</td>
                            <td>
                                <form action="{{ route('mereks.destroy', $merek->id) }}" method="POST">
                                    {{-- <a class="btn btn-info" href="{{ route('mereks.show',$merek->id) }}">Show</a> --}}
                                    <a class="btn btn-primary" href="{{ route('mereks.edit', $merek->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus {{$merek->nama}}?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</div>
{!! $mereks->links() !!}
</div>
@endsection
