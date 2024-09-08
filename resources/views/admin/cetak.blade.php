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
            <td>{{ $nasabah->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $nasabah->email }}</td>
        </tr>
        <tr>
            <th>Saldo</th>
            <td>{{ $nasabah->transaksi->sum('tabungan') }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>No</th>
            <th>Tanggal Transaksi</th>
            <th>Nominal</th>
        </tr>
        @foreach($semuaTrans as $st)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $st->created_at }}</td>
            <td>{{ $st->tabungan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
