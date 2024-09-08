

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                <?php if(Auth::user()->peran == 'teller'): ?>
                <a href="<?php echo e(route('transaksi.index')); ?>" class="btn btn-warning">kembali</a>
                <br>
                <br>
                <form action="<?php echo e(route('transaksi.cari')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="ktp">nasabah</label>
                        <input type="text" name="ktp" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">cari</button>
                </form>
                <br>
                <?php if(isset($nasabah)): ?>
                nama : <?php echo e($nasabah->name); ?> <br>
                nik : <?php echo e($nasabah->ktp); ?> <br>
                <form action="<?php echo e(route('transaksi.store')); ?>" method="post" id="form-nabung" name="nabung">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e($nasabah->id); ?>">
                    <div class="form-group">
                        <label for="tabungan">nominal</label>
                        <input type="number" name="tabungan" id="tabungan" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>

                <?php else: ?>
                <div class="alert alert-danger">
                    nasabah tidak ditemukan
                </div>
                <?php endif; ?>

                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/transaksi/create.blade.php ENDPATH**/ ?>