<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h1>Data Rental</h1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Rental
                      </button>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>NAMA PEMINJAM</th>
                        <th>DURASI</th>
                        <th>MULAI PINJAM</th>
                        <th>HARGA TOTAL</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($rental as $rental)
                    <tr>
                    <td>{{$rental->id}}</td>
                    <td>{{$rental->nama_peminjam}}</td>
                    <td>{{$rental->durasi}}</td>
                    <td>{{$rental->mulai_pinjam}}</td>
                    <td>{{$rental->harga_total}}</td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rental</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/rental/store" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="namaPeminjam">Masukkan Nama Peminjam</label>
                    <input name="nama_peminjam" type="text" class="form-control" id="namaPeminjam" aria-describedby="emailHelp" placeholder="Masukkan Nama Peminjam">
                </div>

                <div class="form-group">
                    <label for="durasi">Masukkan Durasi</label>
                    <input name="durasi" type="text" class="form-control" id="durasi" aria-describedby="emailHelp" placeholder="Masukkan Durasi">
                </div>

                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                    <input placeholder="Select date" type="date" id="example" class="form-control">
                    <label for="example">Try me...</label>
                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
      </div>
    </div>
  </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
