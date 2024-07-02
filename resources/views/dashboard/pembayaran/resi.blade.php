<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi Pengiriman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            margin-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 18px;
        }
        .info {
            width: 100%;
            margin-bottom: 20px;
        }
        .info td {
            padding: 5px;
        }
        .info .label {
            font-weight: bold;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            position: fixed;
            bottom: 20px;
            width: 100%;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Resi Pengiriman</h1>
            <p>Order Number: {{ $pesanan->kode_pesanan }}</p>
        </div>

        <table class="info">
            <tr>
                <td class="label">Nama Pengguna:</td>
                <td>{{ $pesanan->nama }}</td>
                <td class="label">Email:</td>
                <td>{{ $pesanan->email }}</td>
            </tr>
            <tr>
                <td class="label">Alamat Lengkap:</td>
                <td>{{ $pesanan->alamat_lengkap }}</td>
                <td class="label">Provinsi:</td>
                <td>{{ $pesanan->provinsi }}</td>
            </tr>
            <tr>
                <td class="label">Kota:</td>
                <td>{{ $pesanan->kota }}</td>
                <td class="label">Kecamatan:</td>
                <td>{{ $pesanan->kecamatan }}</td>
            </tr>
            <tr>
                <td class="label">Kode Pos:</td>
                <td>{{ $pesanan->kode_pos }}</td>
                <td class="label">No. Telepon:</td>
                <td>{{ $pesanan->no_telp }}</td>
            </tr>
            <tr>
                <td class="label">Metode Pembayaran:</td>
                <td>{{ $pesanan->metode_pembayaran }}</td>
                <td class="label">Metode Pengiriman:</td>
                <td>{{ $pesanan->metode_pengiriman }}</td>
            </tr>
            <tr>
                <td class="label">Status:</td>
                <td>{{ $pesanan->status }}</td>
            </tr>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesanan->items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->produk->judul_buku }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp {{ number_format($item->produk->harga, 0, ',', '.') }}</td> 
                        <td>Rp {{ number_format(($item->produk->harga * $item->jumlah), 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>Total Harga: Rp {{ number_format($totalHarga, 0, ',', '.') }}</p>
            <p>&copy; {{ date('Y') }} Perusahaan Pengiriman. Semua hak dilindungi.</p>
        </div>
    </div>
</body>
</html>