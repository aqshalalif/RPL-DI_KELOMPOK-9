@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Perjalanan</strong>
        </div>
        <div class="card-body card-block">
            <form action=" {{route('travels.store')}} " method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Traveler</label>
                    <input type="text" name="name" value=" {{old('name') ? old('name') : auth()->user()->name }} " class="form-control @error('name') is-invalid @enderror" disabled>
                    @error('name')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="origin" class="form-control-label">Lokasi Asal</label>
                    <input type="text" name="origin" value=" {{old('origin')}} " class="form-control @error('origin') is-invalid @enderror">
                    @error('origin')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="destination" class="form-control-label">Lokasi Tujuan</label>
                    <input type="text" name="destination" value=" {{old('destination')}} " class="form-control @error('destination') is-invalid @enderror">
                    @error('destination')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="departure_date" class="form-control-label">Tanggal Keberangkatan</label>
                    <input type="text" name="departure_date" value=" {{old('departure_date')}} " class="form-control @error('departure_date') is-invalid @enderror">
                    @error('departure_date')
                        <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Data Perjalanan</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection