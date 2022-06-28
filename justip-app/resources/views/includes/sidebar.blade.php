    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>

                    <li class="menu-title">Pesanan</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" {{ route('products.index') }} "> <i class="menu-icon fa fa-list"></i>Lihat Pesanan</a>
                    </li>
                    <li class="">
                        <a href="{{ route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Pesanan</a>
                    </li>

                    <li class="menu-title">Perjalanan</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" {{ route('travels.index') }} "> <i class="menu-icon fa fa-list"></i>Lihat Perjalanan</a>
                    </li>
                    <li class="">
                        <a href=" {{ route('travels.create') }} "> <i class="menu-icon fa fa-plus"></i>Tambah Perjalanan</a>
                    </li>

                    @can('admin')
                    <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" {{ route('transactions.index') }} "> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                    </li>
                    @endcan

                    <li class="menu-title">Pembayaran</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" {{ route('transactions.index') }} "> <i class="menu-icon fa fa-list"></i>Deposit</a>
                    </li>
                    <li class="">
                        <a href=" {{ route('transactions.index') }} "> <i class="menu-icon fa fa-list"></i>Withdraw</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->