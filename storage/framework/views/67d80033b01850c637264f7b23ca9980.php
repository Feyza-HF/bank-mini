

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Beranda Nasabah</div>

                <div class="card-body">
                <?php if(Auth::user()->peran == 'nasabah'): ?>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-danger">kembali</a>
                <a href="<?php echo e(route('nasabah.cetak')); ?>" target="_blank" class="btn btn-primary">cetak laporan</a>
                <br>
                <br>
                <h1>detail nasabah</h1>
                <table class="table table-bordered">
                <tr>
                        <th>nama</th>
                        <td><?php echo e(Auth::user()->name); ?></td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td><?php echo e(Auth::user()->email); ?></td>
                    </tr>
                    <tr>
                        <th>saldo</th>
                        <td><?php echo e(Auth::user()->transaksi->sum('tabungan')); ?></td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <tr>
                        <th>no</th>
                        <th>tanggal transaksi</th>
                        <th>nominal</th>
                    </tr>
                    <?php $__currentLoopData = $semuaTrans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($loop->iteration); ?></td>
                        <td> <?php echo e($st->created_at); ?></td>
                        <td> <?php echo e($st->tabungan); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php else: ?>
                <h1>anda tidak memiliki akses ke halaman ini</h1>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/nasabah/index.blade.php ENDPATH**/ ?>