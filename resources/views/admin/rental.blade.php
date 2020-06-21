@extends('layouts/user')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Data Rental Kendaraan</h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Peminjam</th>
                    <th>Durasi Peminjaman</th>
                    <th>Mulai Peminjaman</th>
                    <th>Harga Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rental as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->nama_peminjam }}</td>
                        <td>{{ $r->durasi }} Hari</td>
                        <td>{{ $r->mulai_pinjam}}</td>
                        <td>Rp. {{ number_format($r->harga_total,2,',','.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
