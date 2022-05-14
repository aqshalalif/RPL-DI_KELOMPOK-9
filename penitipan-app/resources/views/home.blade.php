@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr class="table-light">
                          <td>ID</td>
                          <td>Nama</td>
                          <td>Email</td>
                          <td>Phone</td>
                          <td>Barang</td>
                          <td>Berat</td>
                        </tr>
                    </thead>
                  </table>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Tambah</button>
            <button type="submit" class="btn btn-block btn-warning">Edit</button>
            <button type="submit" class="btn btn-block btn-dark">Delete</button>
        </div>
    </div>
</div>
@endsection
