@extends('layouts/user')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Data Jenis Kendaraan</h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Jenis Kendaraan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenis as $j)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $j->jns_kendaraan }}</td>
                        <td>Rp. {{ number_format($j->harga,2,',','.') }} / Hari</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
