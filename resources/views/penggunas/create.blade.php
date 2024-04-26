@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row align-item-center my-4">
        <div class="col">
            <h2 class="h3 mb-0 page-title">Tambahkan Pengguna</h2>
</div>
<div class="col-auto">
<a class="btn btn-primary" href="{{ route('penggunas.index') }}"> Back</a>
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
<form action="{{ route('penggunas.store') }}" method="POST">
@csrf
<div class="row my-4">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <table class="table datatables" id="dataTable-1">
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                         <strong>ID:</strong>
                         <input type="text" name="id" class="form-control" placeholder="Nama">
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                         <strong>Nama:</strong>
                         <input type="text" name="name" class="form-control" placeholder="Nama">
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
                        <strong>No Telepon:</strong>
                        <input type="text" name="tlp" class="form-control" placeholder="No Telepon">
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Petugas</strong>
                        <select class="form-control" id="role" name="role" required="nama_pet">
                            <option value="--Pilih Role anda--" selected disabled>--Pilih Role Petugas--</option>
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                        </select>
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="form-group">
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