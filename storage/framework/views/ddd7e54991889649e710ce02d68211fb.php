

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

                nama :<?php echo e($transaksi->user->name); ?> <br>
                nik :<?php echo e($transaksi->user->ktp); ?> 
                <br>
                <br>
                <form action="<?php echo e(route('transaksi.update', $transaksi ->id)); ?>" method="post" id="form-nabung" name="nabung">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e($transaksi->user_id); ?>">
                    <div class="form-group">
                        <label for="tabungan">nominal</label>
                        <input type="number" name="tabungan" id="tabungan" class="form-control"
                        value="<?php echo e($transaksi->tabungan); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">simpan</button>
                </form>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>