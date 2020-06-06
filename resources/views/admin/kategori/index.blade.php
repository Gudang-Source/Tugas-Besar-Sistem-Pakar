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
        <h3 class="panel-title">Data Kategori Kendaraan</h3>
        <div class="right">
            <a class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#kategorikModal">Tambah Data
                Kategori</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a href="#" class="keterangan" data-type="text" data-pk="{{ $k->id }}" data-url="{{ url('/api/admin/kategori/'.$k->id.'/update') }}" data-title="Ubah Nama Kategori">{{ $k->nama_kategori }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/kategori/'.$k->id.'/delete') }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin dihapus ?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="kategorikModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/kategori/create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputKategori">Masukkan Nama Kategori</label>
                        <input name="nama_kategori" type="text" class="form-control" id="inputKategori"
                            aria-describedby="emailHelp" placeholder="Masukkan Nama Kategori">
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
    </script>
@endsection
