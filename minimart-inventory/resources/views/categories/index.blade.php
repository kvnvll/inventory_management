<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Categories</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#f1f5f9;
            display:flex;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            height:100vh;
            background:#0f172a;
            position:fixed;
            left:0;
            top:0;
            padding:25px 20px;
            color:white;
        }

        .logo{
            font-size:28px;
            font-weight:bold;
            margin-bottom:40px;
            text-align:center;
            color:#38bdf8;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:12px;
        }

        .menu a{
            text-decoration:none;
            color:#cbd5e1;
            padding:14px 16px;
            border-radius:10px;
            transition:0.3s;
            font-size:15px;
            font-weight:500;
        }

        .menu a:hover{
            background:#1e293b;
            color:white;
        }

        .menu .active{
            background:#2563eb;
            color:white;
        }

        /* MAIN CONTENT */

        .main{
            margin-left:260px;
            width:100%;
            padding:35px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
            flex-wrap:wrap;
            gap:15px;
        }

        .title{
            font-size:32px;
            font-weight:bold;
            color:#0f172a;
        }

        .btn{
            padding:11px 18px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            text-decoration:none;
            color:white;
            font-size:14px;
            transition:0.3s;
        }

        .btn:hover{
            opacity:0.9;
        }

        .btn-add{
            background:#16a34a;
        }

        .btn-edit{
            background:#2563eb;
        }

        .btn-delete{
            background:#dc2626;
        }

        .success{
            background:#dcfce7;
            color:#166534;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:14px;
            overflow:hidden;
            box-shadow:0 4px 14px rgba(0,0,0,0.08);
        }

        table th{
            background:#0f172a;
            color:white;
            padding:16px;
            text-align:left;
            font-size:14px;
        }

        table td{
            padding:16px;
            border-bottom:1px solid #e2e8f0;
            color:#334155;
            font-size:14px;
        }

        tr:hover{
            background:#f8fafc;
        }

        .actions{
            display:flex;
            gap:10px;
        }

        .empty{
            text-align:center;
            padding:45px;
            color:gray;
        }

    </style>

</head>
<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">
            Mini Mart
        </div>

        <div class="menu">

            <a href="/dashboard">
                Dashboard
            </a>

            <a href="/products">
                Products
            </a>

            <a href="/categories"
               class="active">
                Categories
            </a>

            <a href="/suppliers">
                Suppliers
            </a>

        </div>

    </div>

    <!-- MAIN CONTENT -->

    <div class="main">

        @if(session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif

        <div class="topbar">

            <div class="title">
                Categories
            </div>

            <a href="/categories/create"
               class="btn btn-add">

                + Add Category

            </a>

        </div>

        <!-- TABLE -->

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>

            @forelse($categories as $category)

                <tr>

                    <td>{{ $category->id }}</td>

                    <td>{{ $category->name }}</td>

                    <td>

                        <div class="actions">

                            <a href="/categories/{{ $category->id }}/edit"
                               class="btn btn-edit">

                                Edit

                            </a>

                            <form action="/categories/{{ $category->id }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-delete">

                                    Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3"
                        class="empty">

                        No categories found.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</body>
</html>