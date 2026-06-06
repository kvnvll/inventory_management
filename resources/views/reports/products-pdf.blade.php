<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Products Report</title>

    <style>
        body{
            font-family: DejaVu Sans, Arial, sans-serif;
            font-size:12px;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid #000;
        }

        th{
            background:#f2f2f2;
            padding:8px;
            text-align:center;
        }

        td{
            padding:6px;
            text-align:center;
        }
    </style>
</head>
<body>

<h2>Products Report</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Barcode</th>
            <th>Category</th>
            <th>Supplier</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->barcode }}</td>
            <td>{{ $product->category?->name }}</td>
            <td>{{ $product->supplier?->name }}</td>
            <td>PHP {{ number_format($product->price, 2) }}</td>
            <td>{{ $product->stock }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>
