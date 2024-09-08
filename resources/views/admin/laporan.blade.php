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
                        @foreach($semuaTransaksi as $st)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $st->created_at }}</td>
                            <td>{{ $st->user->name }}</td>
                            <td>{{ $st->tabungan }}</td>
                        </tr>
                        @endforeach
                    </table>
    </body>
    </html>