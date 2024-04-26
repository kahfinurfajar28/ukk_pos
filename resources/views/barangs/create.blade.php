@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row align-item-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Tambahkan Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
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
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table datatables" id="dataTable-1">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Barang:</strong>
                    <input type="number" min="0" name="id" class="form-control" placeholder="Merek">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang:</strong>
                    <input type="text" name="nama_bar" class="form-control" placeholder="Nama Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pilih Merek</strong>
                        <select class="form-control" id="merek" name="merek" required="merek">
                            <option value="--Pilih Merek Anda--" selected disabled>--Pilih Merek anda--</option>
                        @foreach ($merek as $cr)
                            <option value="{{ $cr->nama }}">{{ $cr->nama }}</option>
                        @endforeach
                        </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pilih Distributor</strong>
                    <select class="form-control" id="distributor" name="nama_dis" required="nama_dis">
                    <option value="--Pilih Distributpr anda--" selected disabled>--Pilih Distributor anda--</option>
                        @foreach ($distributor as $dists)
                            <option value="{{ $dists->nama_dis }}">{{ $dists->nama_dis }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga jual:</strong>
                    <input type="number" min="0" name="harga_bar" class="form-control" placeholder="Harga Barang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Distributor:</strong>
                    <input type="number" min="0" name="harga_bel" class="form-control" placeholder="Harga Beli">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Stok:</strong>
                    <input type="number" min="0" name="stok" class="form-control" placeholder="Jumlah Stok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <input type="text" min="0" name="kategori" class="form-control" placeholder="Kategori">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
            <strong>Pilih Petugas</strong>
            <select class="form-control" id="petugas" name="nama_pet" required="nama_pet">
                <option value="--Pilih Distributpr anda--" selected disabled>--Pilih Nama Petugas--</option>
                @foreach ($pengguna as $pet)
                    <option value="{{ $pet->nama_pet }}">{{ $pet->nama_pet }}</option>
                @endforeach
            </select>
                </div>
                </div> --}}
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
