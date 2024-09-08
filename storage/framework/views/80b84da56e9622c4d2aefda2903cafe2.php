

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Beranda Admin - User / Nasabah</div>

                <div class="card-body">
                <?php if(Auth::user()->peran == 'admin'): ?>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-danger">kembali</a>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">tambah user/nasabah</a>
                <br>
                <br>
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>nik</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>hp</th>
                        <th>peran</th>
                        <th>aksi</th>
                    </tr>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($u->ktp); ?></td>
                        <td><?php echo e($u->name); ?></td>
                        <td><?php echo e($u->email); ?></td>
                        <td><?php echo e($u->hp); ?></td>
                        <td><?php echo e($u->peran); ?></td>
                        <td>
                            <a href="<?php echo e(route('users.delete', $u->id)); ?>" class="btn btn-danger">hapus</a>
                            <a href="<?php echo e(route('users.edit', $u->id)); ?>" class="btn btn-warning">edit</a>
                            <?php if($u->peran=='nasabah'): ?>
                            <a href="<?php echo e(route('admin.laporan.cetak.pilih', $u->id)); ?>" class="btn btn-success">cetak</a>
                            <?php endif; ?>
                        </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/user/index.blade.php ENDPATH**/ ?>