@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row align-item-cneter mb-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Edit distributor</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('distributors.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('distributors.update', $distributor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table datatables" id="dataTable-1">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    {{-- <span value="{{ $distributor->nama_dis }}"></span> --}}
                    <input type="text" name="nama_dis" value="{{ $distributor->nama_dis }}" class="form-control"
                        placeholder="Nama Distributor" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" value="{{ $distributor->alamat }}" class="form-control"
                        placeholder="Alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Telepon:</strong>
                    <input type="number" min="0" minlength="12" max="999999999999" name="no_telp"  class="form-control" value="{{ $distributor->no_telp }}"
                        placeholder="No Telepon">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
                        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
    </form>
@endsection
