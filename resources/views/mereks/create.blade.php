@extends('layouts.master')
@section('content')
<div class="container">
<div class="row ailgn-item-center my-4">
<div class="col">
<h2 class="h3 mb-0 page-title">Tambahkan Merek</h2>
</div>
<div class="col-auto">
<a class="btn btn-primary" href="{{ route('mereks.index') }}"> Back</a>
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
<form action="{{ route('mereks.store') }}" method="POST">
@csrf
<div class="col-md-12">
    <div class="card shadow">
        <div class="card-body">
            <table class="table datatables" id="dataTable-1">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Merek:</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Merek">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>
</form>
</div>
@endsection