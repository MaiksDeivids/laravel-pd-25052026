<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Archived Products</h1>

    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ ucfirst(str_replace('_', ' ', $product->status)) }}
        </td>
</body>
</html>