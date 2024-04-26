@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="row align-item-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Edit</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('penggunas.index') }}"> Back</a>
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
    <form action="{{ route('penggunas.update', $pengguna->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table datatables" id="dataTable-1">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>alamat:</strong>
                    <input type="text" name="alamat" class="form-control"
                        placeholder="alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tlp:</strong>
                    <input type="text" name="tlp" class="form-control"
                        placeholder="tlp">
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
    </form>
@endsection
