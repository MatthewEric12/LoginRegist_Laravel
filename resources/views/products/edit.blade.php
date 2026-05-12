 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Produk:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <br>
        <label>Harga:</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        <br>
        <label>Deskripsi:</label>
        <textarea name="description">{{ $product->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
