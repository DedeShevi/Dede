@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border">
                <div class="card-body">
                    <h5 class="font-weight-bold">
                        Data Jenis Transaksi
                    </h5>
                    <div class="mt-3 mb-3">
                        <a href="{{ route('ambil-form.transaksi') }}" class="btn btn-info">Tambah Jenis</a>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No. Nota</th>
                                <th>Nama Pelanggan</th>
                                <th>Jenis</th>
                                <th>Total Biaya</th>
                                <th>Tanggal</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0345</td>
                                <td>John Cena</td>
                                <td>Mobil</td>
                                <td>Rp.50.000</td>
                                <td>12/2/2021</td>
                                <td>
                                    <form action=""method="post">
                                        <a href="http://" class="btn btn-primary btn-sm">Cetak Nota</a>
                                        <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection