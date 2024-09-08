<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                  <?php if(Auth::user()->peran == 'admin'): ?>
                    <h1>selamat datang admin</h1>
                    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary">user/nasabah</a>
                    <a href="<?php echo e(route('admin.laporan.cetak')); ?>" target="_blank" class="btn btn-primary">laporan</a>
                  <?php elseif(Auth::user()->peran == 'teller'): ?>
                    <h1>selamat datang teller</h1>
                    <a href="<?php echo e(route('transaksi.index')); ?>" class="btn btn-primary">Transaksi</a>
                  <?php elseif(Auth::user()->peran == 'nasabah'): ?>
                    <h1>selamat datang nasabah</h1>
                    <a href="<?php echo e(route('nasabah.index')); ?>" class="btn btn-primary">laporan</a>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/home.blade.php ENDPATH**/ ?>