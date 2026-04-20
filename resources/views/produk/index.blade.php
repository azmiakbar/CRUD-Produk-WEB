<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>

<h1>Data Produk</h1>

<a href="{{ route('produk.create') }}">Tambah Produk</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama_produk }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->stok }}</td>
        <td>
            <a href="{{ route('produk.edit', $item->id) }}">Edit</a>

            <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>