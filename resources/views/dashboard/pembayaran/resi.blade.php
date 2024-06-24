<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 20px;
        }
        .details, .items {
            width: 100%;
            border-collapse: collapse;
        }
        .details td, .items th, .items td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .items th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Resi</h1>
            <p>Order Number: {{ $pesanan->kode_pesanan }}</p>
        </div>
        <div class="details">
            <table>
                <tr>
                    <td><strong>Nama Pengguna:</strong></td>
                    <td>{{ $pesanan->nama }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $pesanan->email }}</td>
                </tr>
                <tr>
                    <td><strong>Alamat Lengkap:</strong></td>
                    <td>{{ $pesanan->alamat_lengkap }}</td>
                </tr>
                <tr>
                    <td><strong>Provinsi:</strong></td>
                    <td>{{ $pesanan->provinsi }}</td>
                </tr>
                <tr>
                    <td><strong>Kota:</strong></td>
                    <td>{{ $pesanan->kota }}</td>
                </tr>
                <tr>
                    <td><strong>Kecamatan:</strong></td>
                    <td>{{ $pesanan->kecamatan }}</td>
                </tr>
                <tr>
                    <td><strong>Kode Pos:</strong></td>
                    <td>{{ $pesanan->kode_pos }}</td>
                </tr>
                <tr>
                    <td><strong>No. Telepon:</strong></td>
                    <td>{{ $pesanan->no_telp }}</td>
                </tr>
                <tr>
                    <td><strong>Metode Pembayaran:</strong></td>
                    <td>{{ $pesanan->metode_pembayaran }}</td>
                </tr>
                <tr>
                    <td><strong>Metode Pengiriman:</strong></td>
                    <td>{{ $pesanan->metode_pengiriman }}</td>
                </tr>
                <tr>
                    <td><strong>Status:</strong></td>
                    <td>{{ $pesanan->status }}</td>
                </tr>
            </table>
        </div>
        <div class="items">
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan->items as $item)
                        <tr>
                            <td>{{ $item->produk->judul_buku }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>Rp {{ number_format($item->produk->harga, 0, ',', '.') }}</td> 
                            <td>Rp {{ number_format(($item->produk->harga * $item->jumlah), 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p>Total Harga: Rp {{ number_format($totalHarga, 0, ',', '.') }}</p>
        </div>
    </div>
</body>
</html>
