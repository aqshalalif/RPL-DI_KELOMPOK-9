

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <strong>Withdraw</strong>
            <br>
            <medium> Saldo saat ini: Rp1.200.000 </medium>
        </div>
        <div class="card-body card-block">
            <form action=" <?php echo e(route('products.store')); ?> " method="POST">
                <?php echo csrf_field(); ?>

                

                <div class="form-group">
                    <label for="amount" class="form-control-label">Nomor Rekening Tujuan</label>
                    <input type="number" name="amount" value=" <?php echo e(old('amount')); ?> " class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-muted"> <?php echo e($message); ?> </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="amount" class="form-control-label">Nominal Withdraw</label>
                    <input type="number" name="amount" value=" <?php echo e(old('amount')); ?> " class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-muted"> <?php echo e($message); ?> </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 6\RPL Desain dan Implementasi\Tugas Besar\justip-app-admin\resources\views/pages/payments/paytraveler.blade.php ENDPATH**/ ?>