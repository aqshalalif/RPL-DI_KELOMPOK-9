@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Perjalanan</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Traveler Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Departure Date</th>
                                        <th>Travel Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($travelers as $traveler)
                                        <tr>
                                            <td> {{$traveler->id}} </td>
                                            <td> {{$traveler->name}} </td>
                                            <td> {{$traveler->origin}} </td>
                                            <td> {{$traveler->destination}} </td>
                                            <td> {{$traveler->departure_date}} </td>
                                            <td> {{$traveler->travel_status}} </td>
                                            <td  class="text-center">
                                                <div>
                                                    <a href=" {{route('transactions.create')}} " class="btn btn-success btn-block">
                                                        <i></i> Bayar Traveler
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5"> Data Tidak Tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection