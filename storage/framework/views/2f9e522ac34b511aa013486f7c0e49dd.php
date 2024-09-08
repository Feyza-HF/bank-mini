<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Detail Nasabah</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo e($nasabah->name); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo e($nasabah->email); ?></td>
        </tr>
        <tr>
            <th>Saldo</th>
            <td><?php echo e($nasabah->transaksi->sum('tabungan')); ?></td>
        </tr>
    </table>

    <table>
        <tr>
            <th>No</th>
            <th>Tanggal Transaksi</th>
            <th>Nominal</th>
        </tr>
        <?php $__currentLoopData = $semuaTrans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($st->created_at); ?></td>
            <td><?php echo e($st->tabungan); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/admin/cetak.blade.php ENDPATH**/ ?>