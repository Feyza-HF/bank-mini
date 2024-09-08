

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                <?php if(Auth::user()->peran == 'teller'): ?>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-warning">kembali</a>
                <a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-primary">tambah transaksi</a>            
                <br>
                <br>
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>tanggal transaksi</th>
                        <th>nasabah</th>
                        <th>nominal</th>
                        <th>aksi</th>
                    </tr>
                    <?php $__currentLoopData = $semuaTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($st->created_at); ?></td>
                        <td><?php echo e($st->user->name); ?></td>
                        <td><?php echo e($st->tabungan); ?></td>
                        <td>
                            <a href="<?php echo e(route('transaksi.delete', $st->id)); ?>" class="btn btn-danger">hapus</a>
                            <a href="<?php echo e(route('transaksi.edit', $st->id)); ?>" class="btn btn-warning">edit</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/transaksi/index.blade.php ENDPATH**/ ?>