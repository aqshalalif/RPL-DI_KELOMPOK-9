@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Bayar Traveler</strong>
        </div>
        <div class="card-body card-block">
            <form action=" {{route('transactions.store')}} " method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama_penitip" class="form-control-label">Nama Penitip</label>
                    <input type="text" name="nama_penitip" value=" {{old('nama_penitip') ? old('nama_penitip') : auth()->user()->name}}  " class="form-control @error('nama_penitip') is-invalid @enderror">
                    @error('nama_penitip')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_traveler" class="form-control-label">Nama Traveler</label>
                    <input type="text" name="nama_traveler" value=" {{old('nama_traveler')}} " class="form-control @error('nama_traveler') is-invalid @enderror">
                    @error('nama_traveler')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="pesanan_id" class="form-control-label">Nama Pesanan</label>
                    <select name="pesanan_id" class="form-control @error('pesanan_id') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value=" {{$product->id}} "> {{$product->name}} </option>
                        @endforeach
                    </select>
                    @error('pesanan_id')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="transaction_total" class="form-control-label">Nominal Pembayaran</label>
                    <input type="text" name="transaction_total" value=" {{old('transaction_total')}} " class="form-control @error('transaction_total') is-invalid @enderror">
                    @error('transaction_total')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Bayar</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection