<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>laporan seluruh transaksi</h1>
    <table class="table">
                        <tr>
                            <th>no</th>
                            <th>tanggal transaksi</th>
                            <th>nasabah</th>
                            <th>nominal</th>
                        </tr>
                        <?php $__currentLoopData = $semuaTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($st->created_at); ?></td>
                            <td><?php echo e($st->user->name); ?></td>
                            <td><?php echo e($st->tabungan); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
    </body>
    </html><?php /**PATH C:\laragon\www\bankmini_feyza\resources\views/admin/laporan.blade.php ENDPATH**/ ?>