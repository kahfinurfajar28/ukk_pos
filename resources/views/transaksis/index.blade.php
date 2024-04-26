@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
</head>
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table datatables" id="dataTable-1">
                        <div class="row align-item-center my-4">
                            <div class="col">
                                <h2 class="h3 mb-0 page-title">Daftar Transaksi</h2>
                            </div>
                        </div>
                        <tr>
                            <th>No</th>
                            <th >Nama Barang</th>
                            <th >Harga Barang</th>
                            {{-- <th >Stok</th> --}}
                            <th >Total Harga</th>
                            <th >Total Bayar</th>
                            <th >Kembalian</th>
                            <th >Tanggal Beli</th>
                            <th width="150px">Action</th>
                        </tr>
                        @foreach ($transaksis as $transaksi)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $transaksi->nama_bar }}</td>
                            <td>{{ $transaksi->harga_bar }}</td>
                            {{-- <td>{{ $transaksi->total_bar }}</td> --}}
                            <td>{{ $transaksi->total_har }}</td>
                            <td>{{ $transaksi->total_bay }}</td>
                            <td>{{ $transaksi->kembalian }}</td>
                            <td>{{ $transaksi->tanggal_bel }}</td>
                            <td>
                                <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST">
                                    {{-- <button onclick="window.print();" class="btn btn-succes">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                                        </svg>
                                    </button> --}}
                                    {{-- <a class="btn btn-primary" href="{{ route('transaksis.edit', $transaksi->id) }}">Edit</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau menghapus {{ $transaksi->nama_bar }}?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 1 0 6 6v6a.5.5 0 0 0 1 0V6a.5.5 0 0 0-.5-.5m2.5 0a.5.5 0 0 0 .5.5v6a.5.5 0 0 0-1 0V6a.5.5 0 0 0 .5-.5m3 .5a.5.5 0 0 1-1 0v6a.5.5 0 0 1 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Awal Modal -->
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">TRANSAKSI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('transaksis.store') }}" method="POST">
                    @csrf
                    <br>
                    <br>
                    <strong>Pilih Barang</strong>
                    <select class="form-control" id="nama_bar" name="nama_bar" required="nama_bar">
                        <option value="--Pilih Barang Anda--" selected disabled>--Pilih Barang anda--</option>
                        @foreach ($barang as $cr)
                        <option value="{{ $cr->nama_bar }}">{{ $cr->nama_bar }}:[{{ $cr->stok }}]</option>
                        @endforeach
                    </select>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Harga Barang:</strong>
                            <div id="harga"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Stok:</strong>
                            <input type="number" min="0" name="total_bar" class="form-control" placeholder="Total Barang">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Total Bayar:</strong>
                            <input type="number" min="0" name="total_bay" class="form-control" placeholder="Total Bayar">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12"></div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>

                </form>
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
                                        $('#harga6').empty();
                                        $('#harga').append('<input class="form-control"  id="harga_bar" name="harga_bar" value="' + item.harga_bar + '" style="cursor: not-allowed;">')
                                    });
                                }
                            });
                        })
                    });

                    $(document).ready(function() {
                        $('form').submit(function(event) {
                            // Mendapatkan nilai total bayar dan harga barang dari form
                            var totalBayar = parseFloat($('[name="total_bay"]').val());
                            var hargaBarang = parseFloat($('#harga_bar').val());

                            // Memeriksa apakah total bayar kurang dari harga barang
                            if (totalBayar < hargaBarang) {
                                // Menampilkan alert jika total bayar kurang dari harga barang
                                alert('Uang Tidak Cukup !!');
                                // Mencegah form dari dikirim
                                event.preventDefault();
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- Akhir Modal --> --}}
    {!! $transaksis->links() !!}

@endsection
