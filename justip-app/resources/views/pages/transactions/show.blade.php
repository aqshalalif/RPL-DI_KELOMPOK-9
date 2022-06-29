<table class="table table-bordered">
    <tr>
        <th>Nama Penitip</th>
        <td> {{$item->penitip->name}} </td>
    </tr>

    <tr>
        <th>Nama Traveler</th>
        <td> {{$item->traveler->name}} </td>
    </tr>

    <tr>
        <th>Nama Pesanan</th>
        <td> {{$item->products->name}} </td>
    </tr>

    <tr>
        <th>Total Transaksi</th>
        <td> {{$item->transaction_total}} </td>
    </tr>

    <tr>
        <th>Status Transaksi</th>
        <td> {{$item->transaction_status}} </td>
    </tr>

    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td> {{$item->products->name}} </td>
                    <td> {{$item->products->type}} </td>
                    <td>Rp. {{$item->products->price}} </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

@can('admin')
<div class="row">
    <div class="col-3">
        <a href=" {{route('transactions.status', $item->id)}}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Sukses
        </a>
    </div>

    <div class="col-3">
        <a href=" {{route('transactions.status', $item->id)}}?status=ONGOING" class="btn btn-primary btn-block">
            <i class="fa fa-credit-card"></i> Verifikasi
        </a>
    </div>

    <div class="col-3">
        <a href=" {{route('transactions.status', $item->id)}}?status=CANCELLED" class="btn btn-danger btn-block">
            <i class="fa fa-times"></i> Batalkan
        </a>
    </div>

    <div class="col-3">
        <a href=" {{route('transactions.status', $item->id)}}?status=PENDING" class="btn btn-warning btn-block">
            <i class="fa fa-spinner"></i> Set Pending
        </a>
    </div>
</div>
@endcan

