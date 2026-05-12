 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nama Produk:</label>
        <input type="text" name="name" required>
        <br>
        <label>Harga:</label>
        <input type="number" step="0.01" name="price" required>
        <br>
        <label>Deskripsi:</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
