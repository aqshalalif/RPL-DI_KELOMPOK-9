@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Kurir</strong>
        </div>
        <div class="card-body card-block">
            <form action=" {{route('transactions.update', $item->id)}} " method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama_kurir" class="form-control-label">Nama Kurir</label>
                    <input type="text" name="nama_kurir" value="{{old('nama_kurir')}}" class="form-control @error('nama_kurir') is-invalid @enderror">
                    @error('nama_kurir')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="no_resi" class="form-control-label">Nomor Resi</label>
                    <input type="number" name="no_resi" value="{{old('no_resi')}}" class="form-control @error('no_resi') is-invalid @enderror">
                    @error('no_resi')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Submit Pengiriman</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection