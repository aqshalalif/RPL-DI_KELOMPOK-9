@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Transaksi</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Penitip</th>
                                        <th>Nama Traveler</th>
                                        <th>Nama Pesanan</th>
                                        <th>Total Transaksi</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td> {{$item->id}} </td>
                                            <td> {{$item->penitip->name}} </td>
                                            <td> {{$item->traveler->name}} </td>
                                            <td> {{$item->products->name}} </td>
                                            <td> {{$item->transaction_total}} </td>
                                            <td class="text-center">
                                                @if ($item->transaction_status == 'PENDING')
                                                    <span class="badge badge-pill badge-warning text-dark">
                                                @elseif ($item->transaction_status == 'SUCCESS')
                                                    <span class="badge badge-pill badge-success">
                                                @elseif ($item->transaction_status == 'CANCELLED')
                                                    <span class="badge badge-pill badge-danger">
                                                @elseif ($item->transaction_status == 'ONGOING')
                                                    <span class="badge badge-pill badge-primary">
                                                @else
                                                    <span>
                                                @endif
                                                    {{$item->transaction_status}}
                                                    </span>
                                            </td>

                                            @can('admin')
                                                <td class="text-center">
                                                    @if ($item->transaction_status == 'PENDING')
                                                        
                                                        <a href=" {{route('transactions.status', $item->id)}}?status=ONGOING" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-credit-card"></i>
                                                        </a>

                                                        <a href=" {{route('transactions.status', $item->id)}}?status=CANCELLED" class="btn btn-warning btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    @elseif ($item->transaction_status == 'ONGOING')
                                                        <a href=" {{route('transactions.status', $item->id)}}?status=SUCCESS" class="btn btn-success btn-sm">
                                                            <i class="fa fa-check"></i>
                                                        </a>

                                                        <a href=" {{route('transactions.status', $item->id)}}?status=CANCELLED" class="btn btn-warning btn-sm">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    @endif
                                                    <a 
                                                        href="#mymodal"
                                                        data-remote="{{ route('transactions.show', $item->id) }}"
                                                        data-toggle="modal"
                                                        data-target="#mymodal"
                                                        data-title="Detail Transaksi #{{$item->id}} "
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-eye"></i>
                                                    </a>

                                                    <a href = " {{ route('transactions.edit', $item->id) }} " class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('transactions.destroy', $item->id) }} " method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            @endcan

                                            @cannot('admin')
                                                @if ($item->penitip->id == auth()->user()->id)
                                                    <td class="text-center">
                                                        @if ($item->transaction_status == 'PENDING')
                                                            <a href=" {{route('transactions.status', $item->id)}}?status=CANCELLED" class="btn btn-danger btn-block">
                                                                <i class="fa fa-times"></i> Batalkan
                                                            </a>
                                                        @else
                                                            <a 
                                                                href="#mymodal"
                                                                data-remote="{{ route('transactions.show', $item->id) }}"
                                                                data-toggle="modal"
                                                                data-target="#mymodal"
                                                                data-title="Detail Transaksi #{{$item->id}} "
                                                                class="btn btn-link">
                                                                <i class="fa fa-file-text"></i> Detail
                                                            </a>
                                                        @endif
                                                    </td>
                                                @elseif ($item->traveler->id == auth()->user()->id)
                                                <td class="text-center">
                                                    @if ($item->transaction_status == 'PENDING')
                                                        <a href=" {{route('transactions.courier', $item->id)}}" class="btn btn-success btn-block">
                                                            <i></i> Kirim Barang
                                                        </a>
                                                    @else
                                                        <a 
                                                            href="#mymodal"
                                                            data-remote="{{ route('transactions.show', $item->id) }}"
                                                            data-toggle="modal"
                                                            data-target="#mymodal"
                                                            data-title="Detail Transaksi #{{$item->id}} "
                                                            class="btn btn-link">
                                                            <i class="fa fa-file-text"></i> Detail
                                                        </a>
                                                    @endif
                                                </td>
                                                @endif
                                            @endcannot
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