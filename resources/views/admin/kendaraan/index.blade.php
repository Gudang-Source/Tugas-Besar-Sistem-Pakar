@extends('layouts/user')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <div class="row">
            <div class="col-6">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </div>
        <h3 class="panel-title">Data Kendaraan</h3>
        <div class="right">
            <a class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#kendaraanModal">Tambah Data Kendaraan</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode Kendaraan</th>
                    <th>Keterangan</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kendaraan->all() as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->kode_kendaraan }}</td>
                        <td>
                            <a href="#" class="keterangan" data-type="text" data-pk="{{ $k->id }}" data-url="{{ url('/api/admin/kendaraan/'.$k->id.'/update') }}" data-title="Ubah Keterangan">{{ $k->keterangan }}</a>
                        </td>
                        <td>{{ $k->kategori->nama_kategori }}</td>
                        <td>
                            <a href="{{ url('/admin/kendaraan/'.$k->id.'/delete') }}" class="btn btn-danger btn-sm delete" kendaraan-id="{{ $k->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="kendaraanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kendaraan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/kendaraan/create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputKategori">Masukkan Kode Kendaraan</label>
                        <input name="kode_kendaraan" type="text" class="form-control" id="inputKategori"
                            aria-describedby="emailHelp" placeholder="Masukkan Kode Kendaraan" value="{{ $kendaraan->kode_kendaraan() }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Pilih Kategori Kendaraan</label>
                        <select class="form-control" name="id_kategori">
                            <option selected disabled>Pilih Kategori Kendaraan</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control" id="inputKategori"
                            aria-describedby="emailHelp" placeholder="Masukkan Keterangan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script>
$(document).ready(function() {
    $('.keterangan').editable();
});
$('.delete').click(function(){
        var kendaraan_id = $(this).attr('kendaraan-id');
        swal({
            title: "Yakin ?",
            text: "Mau Menghapus Data Kendaraan Ini",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        });
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/admin/kendaraan/" + kendaraan_id + "/delete";
            }
        });
    });
</script>
@endsection
