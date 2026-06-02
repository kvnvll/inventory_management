<!DOCTYPE html>
<html>
<head>
    <title>Categories Report</title>

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

<h2>Categories Report</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>