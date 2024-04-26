@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row align-item-center mb-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Edit Merek</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('mereks.index') }}"> Back</a>
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
    <form action="{{ route('mereks.update', $merek->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row my-4">
                <div class="col -md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="dataTable-1">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $merek->nama }}" class="form-control"
                        placeholder="Merek">
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
