@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Deposit</strong>
        </div>
        <div class="card-body card-block">
            <form action=" {{route('products.store')}} " method="POST">
                @csrf

                <div class="form-group">
                    <label for="products_id" class="form-control-label">Nama Pesanan</label>
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
                    <label for="amount" class="form-control-label">Nominal Pembayaran</label>
                    <input type="number" name="amount" value=" {{old('amount')}} " class="form-control @error('amount') is-invalid @enderror">
                    @error('amount')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="payment_method" class="form-control-label">Metode Pembayaran</label>
                    <select name="payment_method" class="form-control @error('payment_method') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value=" {{$product->id}} "> Transfer bank </option>
                        @endforeach
                    </select>
                    @error('payment_method')
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