<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#eef2f7;
            display:flex;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            height:100vh;
            background:linear-gradient(to bottom,#0f172a,#1e293b);
            position:fixed;
            left:0;
            top:0;
            padding:25px 20px;
            color:white;
        }

        .logo{
            font-size:30px;
            font-weight:bold;
            margin-bottom:45px;
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
            padding:15px 18px;
            border-radius:12px;
            transition:0.3s;
            font-size:15px;
        }

        .menu a:hover{
            background:#334155;
            color:white;
            transform:translateX(5px);
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
            margin-bottom:30px;
        }

        .topbar h1{
            font-size:34px;
            color:#0f172a;
        }

        .subtitle{
            color:#64748b;
            margin-top:5px;
        }

        /* FORM CARD */

        .form-card{
            background:white;
            padding:35px;
            border-radius:20px;
            box-shadow:0 4px 12px rgba(0,0,0,0.08);
            max-width:800px;
        }

        .form-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        .form-group{
            display:flex;
            flex-direction:column;
        }

        .full-width{
            grid-column:1 / 3;
        }

        label{
            margin-bottom:8px;
            color:#334155;
            font-weight:600;
            font-size:14px;
        }

        input,
        select{
            padding:14px;
            border:1px solid #cbd5e1;
            border-radius:10px;
            font-size:14px;
            transition:0.3s;
            background:white;
        }

        input:focus,
        select:focus{
            outline:none;
            border-color:#2563eb;
            box-shadow:0 0 0 3px rgba(37,99,235,0.1);
        }

        /* BUTTONS */

        .actions{
            margin-top:30px;
            display:flex;
            gap:12px;
        }

        .btn{
            padding:13px 20px;
            border:none;
            border-radius:10px;
            cursor:pointer;
            text-decoration:none;
            color:white;
            font-size:14px;
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-2px);
        }

        .btn-save{
            background:#16a34a;
        }

        .btn-back{
            background:#64748b;
        }

        /* ALERTS */

        .error-box{
            background:#fee2e2;
            color:#991b1b;
            padding:16px;
            border-radius:10px;
            margin-bottom:25px;
        }

        .success-box{
            background:#dcfce7;
            color:#166534;
            padding:16px;
            border-radius:10px;
            margin-bottom:25px;
        }

        /* MOBILE */

        @media(max-width:800px){

            .sidebar{
                width:220px;
            }

            .main{
                margin-left:220px;
                padding:20px;
            }

            .form-grid{
                grid-template-columns:1fr;
            }

            .full-width{
                grid-column:auto;
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

            <a href="/products" class="active">
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

        <div class="topbar">

            <h1>Add Product</h1>

            <div class="subtitle">
                Create and manage inventory products
            </div>

        </div>

        <div class="form-card">

            @if($errors->any())

                <div class="error-box">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            @if(session('success'))

                <div class="success-box">
                    {{ session('success') }}
                </div>

            @endif

            <form action="/products" method="POST">

                @csrf

                <div class="form-grid">

                    <!-- PRODUCT NAME -->

                    <div class="form-group">

                        <label>Product Name</label>

                        <input type="text"
                               name="name"
                               placeholder="Enter product name"
                               value="{{ old('name') }}"
                               required>

                    </div>

                    <!-- BARCODE -->

                    <div class="form-group">

                        <label>Barcode</label>

                        <input type="text"
                               name="barcode"
                               placeholder="Enter barcode"
                               value="{{ old('barcode') }}"
                               required>

                    </div>

                    <!-- CATEGORY -->

                    <div class="form-group">

                        <label>Category</label>

                        <select name="category_id" required>

                            <option value="">
                                Select Category
                            </option>

                            @foreach($categories as $category)

                                <option value="{{ $category->id }}">

                                    {{ $category->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- SUPPLIER -->

                    <div class="form-group">

                        <label>Supplier</label>

                        <select name="supplier_id" required>

                            <option value="">
                                Select Supplier
                            </option>

                            @foreach($suppliers as $supplier)

                                <option value="{{ $supplier->id }}">

                                    {{ $supplier->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- PRICE -->

                    <div class="form-group">

                        <label>Price</label>

                        <input type="number"
                               step="0.01"
                               name="price"
                               placeholder="Enter product price"
                               value="{{ old('price') }}"
                               required>

                    </div>

                    <!-- STOCK -->

                    <div class="form-group">

                        <label>Stock Quantity</label>

                        <input type="number"
                               name="stock"
                               placeholder="Enter stock quantity"
                               value="{{ old('stock') }}"
                               required>

                    </div>

                    <!-- EXPIRATION -->

                    <div class="form-group full-width">

                        <label>Expiration Date</label>

                        <input type="date"
                               name="expiration_date"
                               value="{{ old('expiration_date') }}">

                    </div>

                </div>

                <!-- BUTTONS -->

                <div class="actions">

                    <button type="submit"
                            class="btn btn-save">

                        Save Product

                    </button>

                    <a href="/products"
                       class="btn btn-back">

                        Back

                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>