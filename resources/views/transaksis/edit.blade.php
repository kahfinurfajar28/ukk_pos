@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row align-item-center my-4">
        <div class="col">
            <h2 class="h3 mb-0 page-title">Edit</h2>
        </div>
        <div class="col-auto">
            <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table datatables" id="dataTable-1">
                            <div>
                                <strong>Pilih Barang</strong>
                                <select class="form-control" id="nama_bar" name="nama_bar" required="nama_bar">
                                    <option value="--Pilih Barang Anda--" selected disabled>--Pilih Barang anda--</option>
                                    @foreach ($barang as $cr)
                                        <option value="{{ $cr->nama_bar }}">{{ $cr->nama_bar }}:[{{ $cr->stok }}]</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Harga Barang:</strong>
                                    <div id="harga"></div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Total Barang:</strong>
                                    <input type="number" min="0" name="total_bar" class="form-control" placeholder="Total Barang">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <strong>Total Bayar:</strong>
                                    <input type="number" min="0" name="total_bay" class="form-control" placeholder="Total Bayar">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#nama_bar').on('change', function() {
            var namaBarang = $(this).val();
            $.ajax({
                type: 'GET',
                url: '{{ route('getHarga') }}?nama_bar=' + namaBarang,
                dataType: 'json',
                success: function(response) {
                    $.each(response.hargas, function(key, item) {
                        $('#harga').empty();
                        $('#harga').append('<input class="form-control"  id="harga_bar" name="harga_bar" value="' + item.harga_bar + '" style="cursor: not-allowed;">')
                    });
                }
            });
        })
    });
</script>
@endsection
