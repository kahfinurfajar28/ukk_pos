@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row align-item-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Tambahkan Distributor</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('distributors.index') }}"> Back</a>
            </div>
        </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada input yang salah!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('distributors.store') }}" method="POST">
        @csrf
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table datatables" id="dataTable-1">
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Distributor:</strong>
                    <input type="text" name="nama_dis" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Telepon:</strong>
                    <input type="number" min="0" minlenght="12" max="999999999999" name="no_telp" class="form-control"
                        placeholder="No Telp">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </div>
        </div>
        </div>
        </div>
    </form>
</div>
@endsection
