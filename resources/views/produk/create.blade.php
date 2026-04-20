<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

    <h1>Tambah Produk</h1>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf

        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok"><br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>