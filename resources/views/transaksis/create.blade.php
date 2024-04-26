@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row align-item-center my-4">
            <div class="col">
                <h2 class="h3 mb-0 page-title">Tambahkan transaksi</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
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
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('transaksis.store') }}" method="POST">
            @csrf
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Pilih Barang</strong>
                                <select class="form-control" id="nama_bar" name="nama_bar" required="nama_bar">
                                    <option value="--Pilih Barang Anda--" selected disabled>--Pilih Barang anda--</option>
                                    @foreach ($barang as $cr)
                                        <option value="{{ $cr->nama_bar }}">{{ $cr->nama_bar }}:[{{ $cr->stok }}]</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Harga Barang:</strong>
                                <input class="form-control" id="harga_bar" name="harga_bar">
                            </div>
                            <div class="form-group">
                                <strong>Total Barang:</strong>
                                <input type="number" min="0" name="total_bar" class="form-control" placeholder="Total Barang">
                            </div>
                            <div class="form-group">
                                <strong>Total Bayar:</strong>
                                <input type="number" min="0" name="total_bay" class="form-control" placeholder="Total Bayar">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#nama_bar').on('change', function() {
            var namaBarang = $(this).val();
            $.ajax({
                type: 'GET',
                url: '{{ route('getHarga') }}?nama_bar=' + namaBarang,
                dataType: 'json',
                success: function (response) {
                    if (response.hargas) {
                        $('#harga_bar').val(response.hargas.nama_bar.harga_bar);
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan saat mengambil harga barang. Silakan coba lagi.');
                }
            });
        });
    });
</script>
@endpush
