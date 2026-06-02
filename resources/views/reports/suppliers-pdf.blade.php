<!DOCTYPE html>
<html>
<head>
    <title>Suppliers Report</title>

    <style>
        body{
            font-family: Arial, sans-serif;
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
        }

        td{
            padding:6px;
        }
    </style>
</head>
<body>

<h2>Suppliers Report</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Supplier Name</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>
    </thead>

    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->contact }}</td>
            <td>{{ $supplier->address }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>