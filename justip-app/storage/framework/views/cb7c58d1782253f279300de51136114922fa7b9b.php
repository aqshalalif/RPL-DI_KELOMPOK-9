

<?php $__env->startSection('content'); ?>
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
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td> <?php echo e($item->id); ?> </td>
                                            <td> <?php echo e($item->name); ?> </td>
                                            <td> <?php echo e($item->origin); ?> </td>
                                            <td> <?php echo e($item->destination); ?> </td>
                                            <td> <?php echo e($item->departure_date); ?> </td>
                                            <td> <?php echo e($item->travel_status); ?> </td>
                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="6" class="text-center p-5"> Data Tidak Tersedia</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shadif\Documents\justip-app-admin\resources\views/pages/travels/index.blade.php ENDPATH**/ ?>