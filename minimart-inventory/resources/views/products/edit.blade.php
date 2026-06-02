<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#f1f5f9;
        }

        nav{
            background:#2563eb;
            color:white;
            padding:18px 40px;
            font-size:22px;
            font-weight:bold;
        }

        .container{
            width:550px;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        h2{
            margin-bottom:25px;
            color:#1e293b;
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
            color:#334155;
        }

        input,
        select{
            width:100%;
            padding:12px;
            border:1px solid #cbd5e1;
            border-radius:6px;
            font-size:14px;
            outline:none;
        }

        input:focus,
        select:focus{
            border-color:#2563eb;
        }

        .btn{
            padding:12px 18px;
            border:none;
            border-radius:6px;
            cursor:pointer;
            color:white;
            font-size:15px;
            text-decoration:none;
        }

        .btn-update{
            background:#2563eb;
        }

        .btn-back{
            background:#64748b;
        }

        .actions{
            display:flex;
            gap:10px;
        }

    </style>

</head>
<body>

<nav>
    Mini Mart Inventory System
</nav>

<div class="container">

    <h2>Edit Product</h2>

    <form action="/products/{{ $product->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label>Supplier</label>

            <select name="supplier_id" required>

                @foreach($suppliers as $supplier)

                    <option value="{{ $supplier->id }}"
                        {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>

                        {{ $supplier->name }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="form-group">

            <label>Category</label>

            <select name="category_id" required>

                @foreach($categories as $category)

                    <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>

                        {{ $category->name }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="form-group">

            <label>Product Name</label>

            <input type="text"
                   name="name"
                   value="{{ $product->name }}"
                   required>

        </div>

        <div class="form-group">

            <label>Barcode</label>

            <input type="text"
                   name="barcode"
                   value="{{ $product->barcode }}"
                   required>

        </div>

        <div class="form-group">

            <label>Price</label>

            <input type="number"
                   step="0.01"
                   name="price"
                   value="{{ $product->price }}"
                   required>

        </div>

        <div class="form-group">

            <label>Stock</label>

            <input type="number"
                   name="stock"
                   value="{{ $product->stock }}"
                   required>

        </div>

        <div class="form-group">

            <label>Expiration Date</label>

            <input type="date"
                   name="expiration_date"
                   value="{{ $product->expiration_date }}">

        </div>

        <div class="actions">

            <button type="submit"
                    class="btn btn-update">

                Update Product

            </button>

            <a href="/products"
               class="btn btn-back">

                Back

            </a>

        </div>

    </form>

</div>

</body>
</html>