

<?php $__env->startSection('content'); ?>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo e(url('images/logo.png')); ?>" alt="" width="300">
    <h1 class="display-5 fw-bold">Cari barang yang kamu inginkan</h1>
    <div class="col-lg-8 mx-auto">
      <p class="lead mb-8">Atau atur perjalananmu sambil membantu orang lain untuk mendapatkan barang yang mereka inginkan</p>
      <div class="d-grid gap-6 justify-content-sm-center">
        <a href=" <?php echo e(route('products.create')); ?> "><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Pesan Barang</button></a>
        <a href=" <?php echo e(route('travels.create')); ?> "><button type="button" class="btn btn-outline-primary btn-lg px-4">Atur Perjalanan</button></a>
        
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 6\RPL Desain dan Implementasi\Tugas Besar\justip-app-admin\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>