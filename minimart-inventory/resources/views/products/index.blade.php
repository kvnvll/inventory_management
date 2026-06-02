<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Products</title>

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

        .search-box{
            display:flex;
            gap:10px;
            margin-bottom:25px;
        }

        .search-box input{
            width:320px;
            padding:12px;
            border:1px solid #cbd5e1;
            border-radius:8px;
            font-size:14px;
            background:white;
        }

        .search-btn{
            background:#2563eb;
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

        .low-stock{
            background:#dc2626;
            color:white;
            padding:5px 9px;
            border-radius:6px;
            font-size:11px;
            margin-left:8px;
            font-weight:bold;
        }

        .expired{
            background:#b91c1c;
            color:white;
            padding:5px 9px;
            border-radius:6px;
            font-size:11px;
            margin-left:8px;
            font-weight:bold;
        }

        .expiring{
            background:#f59e0b;
            color:white;
            padding:5px 9px;
            border-radius:6px;
            font-size:11px;
            margin-left:8px;
            font-weight:bold;
        }

        .success{
            background:#dcfce7;
            color:#166534;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
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

            <a href="/products"
               class="active">
                Products
            </a>

            <a href="/categories">
                Categories
            </a>

            <a href="/suppliers">
                Suppliers
            </a>

        </div>

    </div>

    <!-- MAIN -->

    <div class="main">

        @if(session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif

        <div class="topbar">

            <div class="title">
                Product Inventory
            </div>

            <a href="/products/create"
               class="btn btn-add">

                + Add Product

            </a>

        </div>

        <!-- SEARCH -->

        <form method="GET"
              action="/products">

            <div class="search-box">

                <input type="text"
                       name="search"
                       placeholder="Search product or barcode..."
                       value="{{ $search ?? '' }}">

                <button type="submit"
                        class="btn search-btn">

                    Search

                </button>

            </div>

        </form>

        <!-- TABLE -->

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Product</th>
                    <th>Barcode</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Expiration</th>
                    <th>Supplier</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>

            @forelse($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>

                    <td>{{ $product->name }}</td>

                    <td>{{ $product->barcode }}</td>

                    <td>
                        ₱{{ number_format($product->price, 2) }}
                    </td>

                    <td>

                        {{ $product->stock }}

                        @if($product->stock <= 5)

                            <span class="low-stock">
                                LOW STOCK
                            </span>

                        @endif

                    </td>

                    <td>
                        {{ $product->category->name ?? 'No Category' }}
                    </td>

                    <td>

                        @if($product->expiration_date)

                            {{ $product->expiration_date }}

                            @php

                                $today = \Carbon\Carbon::today();

                                $expiration = \Carbon\Carbon::parse(
                                    $product->expiration_date
                                );

                            @endphp

                            @if($expiration->isPast())

                                <span class="expired">
                                    EXPIRED
                                </span>

                            @elseif(
                                $today->diffInDays(
                                    $expiration,
                                    false
                                ) <= 7
                            )

                                <span class="expiring">
                                    EXPIRING SOON
                                </span>

                            @endif

                        @else

                            No Expiration

                        @endif

                    </td>

                    <td>
                        {{ $product->supplier->name ?? 'No Supplier' }}
                    </td>

                    <td>

                        <div class="actions">

                            <a href="/products/{{ $product->id }}/edit"
                               class="btn btn-edit">

                                Edit

                            </a>

                            <form action="/products/{{ $product->id }}"
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

                    <td colspan="9"
                        class="empty">

                        No products found.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</body>
</html>