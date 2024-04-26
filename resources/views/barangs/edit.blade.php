@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row align-item-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Edit Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
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
    <div>
        <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                    <table class="table datatables" id="dataTable-1">
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ID Barang:</strong>
                                <input type="text" name="id" value="{{ $barang->id }}" class="form-control" placeholder="ID Barang">
                            </div>
                        </div> --}}
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Barang:</strong>
                                <input type="text" name="nama_bar" value="{{ $barang->nama_bar }}" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div> --}}
                      <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                        <strong>Pilih Merek</strong>
                        <input type="text" name="merek" value="{{ $barang->merek }}"
                        class="form-control" placeholder="">
                            </div>
                            </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                        <strong>Pilih Distributor</strong>
                        <input type="text" name="nama_dis" value="{{ $barang->nama_dis }}"
                        class="form-control" placeholder="">
                            </div>
                        </div>  --}}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Harga Barang:</strong>
                                <input type="text" name="harga_bar" value="{{ $barang->harga_bar }}"
                                    class="form-control" placeholder="Harga Barang">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Harga Beli:</strong>
                                <input type="text" name="harga_bel" value="{{ $barang->harga_bel }}"
                                    class="form-control" placeholder="Harga Beli">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jumlah Stok:</strong>
                                <input type="text" name="stok" value="{{ $barang->stok }}" class="form-control"
                                    placeholder="Jumlah Stok">
                            </div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kategori:</strong>
                                <input type="text" name="kategori" value="{{ $barang->kategori }}" class="form-control" placeholder="Kategori">
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </table>
            </div>
            </div>
            </div>
            </div>
        </form>
    </div>
@endsection
