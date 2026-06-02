<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Suppliers</title>

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

        /* MAIN */

        .main{
            margin-left:260px;
            width:100%;
            padding:35px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .topbar h1{
            font-size:34px;
            color:#0f172a;
        }

        .btn{
            padding:12px 18px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            color:white;
            text-decoration:none;
            font-size:14px;
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-2px);
        }

        .add{
            background:#16a34a;
        }

        .add:hover{
            background:#15803d;
        }

        .edit{
            background:#2563eb;
        }

        .edit:hover{
            background:#1d4ed8;
        }

        .delete{
            background:#dc2626;
        }

        .delete:hover{
            background:#b91c1c;
        }

        /* TABLE */

        .table-box{
            background:white;
            border-radius:14px;
            overflow:hidden;
            box-shadow:0 2px 12px rgba(0,0,0,0.08);
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#1e293b;
            color:white;
            padding:18px;
            text-align:left;
            font-size:14px;
        }

        td{
            padding:16px;
            border-bottom:1px solid #e2e8f0;
            color:#334155;
        }

        tr:hover{
            background:#f8fafc;
        }

        .actions{
            display:flex;
            gap:10px;
        }

        .badge{
            background:#dbeafe;
            color:#1d4ed8;
            padding:6px 12px;
            border-radius:30px;
            font-size:13px;
            font-weight:bold;
        }

        .empty{
            text-align:center;
            padding:40px;
            color:#64748b;
        }

        @media(max-width:900px){

            .sidebar{
                width:220px;
            }

            .main{
                margin-left:220px;
            }

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

            <a href="/categories">
                Categories
            </a>

            <a href="/suppliers" class="active">
                Suppliers
            </a>

        </div>

    </div>

    <!-- MAIN -->

    <div class="main">

        <div class="topbar">

            <h1>Suppliers</h1>

            <a href="/suppliers/create"
               class="btn add">

                + Add Supplier

            </a>

        </div>

        <!-- TABLE -->

        <div class="table-box">

            <table>

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Supplier Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($suppliers as $supplier)

                    <tr>

                        <td>
                            #{{ $supplier->id }}
                        </td>

                        <td>
                            {{ $supplier->name }}
                        </td>

                        <td>
                            {{ $supplier->contact }}
                        </td>

                        <td>
                            {{ $supplier->address }}
                        </td>

                        <td>
                            <span class="badge">
                                Active
                            </span>
                        </td>

                        <td>

                            <div class="actions">

                                <a href="/suppliers/{{ $supplier->id }}/edit"
                                   class="btn edit">

                                    Edit

                                </a>

                                <form action="/suppliers/{{ $supplier->id }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn delete">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6"
                            class="empty">

                            No suppliers found.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>