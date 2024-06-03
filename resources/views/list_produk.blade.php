<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>List Produk</title>
</head>
<body>
    <div class="ml-10 mt-20">
        <div><h1 class="text-2xl font-bold mb-5">Daftar Produk</h1></div>
        <table class="table-auto border-collapse border border-gray-300 w-full">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Nama Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Deskripsi Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Harga Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tblproduk as $index => $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->deskripsi }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->harga }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <form action="{{ route('produk.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Are you sure you want to delete {{ $item->nama }}?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="ml-10 mt-20">
        <div><h1 class="text-2xl font-bold mb-5">Input Produk</h1></div>
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <table class="table-auto w-full border-collapse border border-gray-300 mb-5">
                <tr class="bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Nama:</td>
                    <td colspan="3" class="border border-gray-300 px-4 py-2">
                        <input type="text" class="w-full px-3 py-2 border-2 border-blue-500 rounded" id="nama" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Deskripsi:</td>
                    <td colspan="3" class="border border-gray-300 px-4 py-2">
                        <input type="text" class="w-full px-3 py-2 border-2 border-blue-500 rounded" id="deskripsi" name="deskripsi" required>
                    </td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">Harga:</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <input type="number" class="w-full px-3 py-2 border-2 border-blue-500 rounded" id="harga" name="harga" required>
                    </td>
                </tr>
            </table>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</body>
</html>
