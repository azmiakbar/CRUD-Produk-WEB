<h1>Edit Produk</h1>

<form action="{{ route('produk.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama_produk" value="{{ $data->nama_produk }}">
    <input type="number" name="harga" value="{{ $data->harga }}">
    <input type="number" name="stok" value="{{ $data->stok }}">

    <button type="submit">Update</button>
</form>