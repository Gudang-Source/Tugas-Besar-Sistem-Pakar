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
                    <th>Jenis Kendaraan</th>
                    <th>K001</th>
                    <th>K002</th>
                    <th>K003</th>
                    <th>K004</th>
                    <th>K005</th>
                    <th>K006</th>
                    <th>K007</th>
                    <th>K008</th>
                    <th>K009</th>
                    <th>K010</th>
                    <th>K011</th>
                    <th>K012</th>
                    <th>K013</th>
                    <th>K014</th>
                    <th>K015</th>
                    <th>K016</th>
                    <th>K017</th>
                    <th>K018</th>
                    <th>K019</th>
                    <th>K020</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rules as $r)
                    <tr>
                        <td>{{ $r->jenis->jns_kendaraan }}</td>
                        <td>{{ $r->K001 }}</td>
                        <td>{{ $r->K002 }}</td>
                        <td>{{ $r->K003 }}</td>
                        <td>{{ $r->K004 }}</td>
                        <td>{{ $r->K005 }}</td>
                        <td>{{ $r->K006 }}</td>
                        <td>{{ $r->K007 }}</td>
                        <td>{{ $r->K008 }}</td>
                        <td>{{ $r->K009 }}</td>
                        <td>{{ $r->K010 }}</td>
                        <td>{{ $r->K011 }}</td>
                        <td>{{ $r->K012 }}</td>
                        <td>{{ $r->K013 }}</td>
                        <td>{{ $r->K014 }}</td>
                        <td>{{ $r->K015 }}</td>
                        <td>{{ $r->K016 }}</td>
                        <td>{{ $r->K017 }}</td>
                        <td>{{ $r->K018 }}</td>
                        <td>{{ $r->K019 }}</td>
                        <td>{{ $r->K020 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
