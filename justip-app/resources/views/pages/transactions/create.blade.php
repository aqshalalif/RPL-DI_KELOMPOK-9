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
                    <label for="traveler_name" class="form-control-label">Nama Traveler</label>
                    <input type="text" name="traveler_name" value=" {{old('traveler_name')}} " class="form-control @error('traveler_name') is-invalid @enderror">
                    @error('traveler_name')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="products_id" class="form-control-label">Nama Barang</label>
                    <select name="products_id" class="form-control @error('products_id') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value=" {{$product->id}} "> {{$product->name}} </option>
                        @endforeach
                    </select>
                    @error('products_id')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="total_amount" class="form-control-label">Nominal Pembayaran</label>
                    <input type="text" name="total_amount" value=" {{old('total_amount')}} " class="form-control @error('total_amount') is-invalid @enderror">
                    @error('total_amount')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                    <button class="btn btn-primary btn-block" type="submit">Tambah Foto Barang</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection