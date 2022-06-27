    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo e(route('dashboard')); ?>"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>

                    <li class="menu-title">Pesanan</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" <?php echo e(route('products.index')); ?> "> <i class="menu-icon fa fa-list"></i>Lihat Pesanan</a>
                    </li>
                    <li class="">
                        <a href="<?php echo e(route('products.create')); ?>"> <i class="menu-icon fa fa-plus"></i>Tambah Pesanan</a>
                    </li>

                    <li class="menu-title">Perjalanan</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" <?php echo e(route('travels.index')); ?> "> <i class="menu-icon fa fa-list"></i>Lihat Perjalanan</a>
                    </li>
                    <li class="">
                        <a href=" <?php echo e(route('travels.create')); ?> "> <i class="menu-icon fa fa-plus"></i>Tambah Perjalanan</a>
                    </li>
                    

                    <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                    <li class="">
                        <a href=" <?php echo e(route('transactions.index')); ?> "> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel --><?php /**PATH C:\Users\Shadif\Documents\justip-app-admin\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>