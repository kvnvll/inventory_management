<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Product | Mini Mart</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f8fafc;
    display:flex;
}

/* SIDEBAR */
.sidebar{
    width:270px;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:linear-gradient(180deg,#0f172a,#1e293b);
    padding:25px;
    color:white;
}

.logo{
    font-size:26px;
    font-weight:700;
    text-align:center;
    color:white;
    margin-bottom:40px;
    padding-bottom:20px;
    border-bottom:1px solid rgba(255,255,255,.1);
}

.menu{
    display:flex;
    flex-direction:column;
    gap:10px;
}

.menu a{
    text-decoration:none;
    color:#cbd5e1;
    padding:14px 18px;
    border-radius:12px;
    transition:.3s;
}

.menu a:hover{
    background:rgba(255,255,255,.08);
    transform:translateX(5px);
}

.menu .active{
    background:#2563eb;
    color:white;
}

/* MAIN */
.main{
    margin-left:270px;
    width:100%;
    padding:35px;
}

/* TOPBAR */
.topbar{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    margin-bottom:25px;
}

.title{
    font-size:30px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    color:#64748b;
    margin-top:5px;
    font-size:14px;
}

/* FORM CARD */
.form-card{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

/* GRID */
.form-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:18px;
}

/* FULL WIDTH */
.full{
    grid-column:span 2;
}

/* FORM GROUP */
.form-group{
    display:flex;
    flex-direction:column;
    gap:6px;
}

label{
    font-size:13px;
    color:#475569;
    font-weight:600;
}

/* INPUTS */
input, select{
    padding:13px 14px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    outline:none;
    font-size:14px;
    transition:.2s;
    background:#fff;
}

input:focus, select:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

/* BUTTONS */
.actions{
    display:flex;
    gap:12px;
    margin-top:25px;
}

.btn{
    padding:12px 18px;
    border:none;
    border-radius:12px;
    cursor:pointer;
    font-size:14px;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-update{
    background:#16a34a;
    color:white;
}

.btn-back{
    background:#64748b;
    color:white;
}

.btn-update:hover{
    background:#15803d;
}

/* RESPONSIVE */
@media(max-width:768px){

    .sidebar{
        display:none;
    }

    .main{
        margin-left:0;
        padding:20px;
    }

    .form-grid{
        grid-template-columns:1fr;
    }

    .full{
        grid-column:auto;
    }
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">KAK<BR> Mini Mart</div>

    <div class="menu">
        <a href="/dashboard">Dashboard</a>
        <a href="/products" class="active">Products</a>
        <a href="/categories">Categories</a>
        <a href="/suppliers">Suppliers</a>
        <a href="/analytics">Analytics</a>
        <a href="/activity-logs">
    Activity Logs
</a>

        <a href="/profile">
    Settings
</a>
    </div>

</div>

<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">
        <div>
            <div class="title">Edit Product</div>
            <div class="subtitle">Update product information</div>
        </div>
    </div>

    <!-- FORM -->
    <div class="form-card">

       <form action="/products/{{ $product->id }}" method="POST">

    @csrf
    @method('PUT')

    @if ($errors->any())
        <div style="
            background:#fee2e2;
            color:#991b1b;
            padding:15px;
            margin-bottom:20px;
            border-radius:10px;
        ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-grid">

        <div class="form-group">
            <label>Product Name</label>
            <input
                type="text"
                name="name"
                value="{{ $product->name }}"
                required>
        </div>

        <div class="form-group">
            <label>Barcode</label>
            <input
                type="text"
                name="barcode"
                value="{{ $product->barcode }}"
                required>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input
                type="number"
                step="0.01"
                name="price"
                value="{{ $product->price }}"
                required>
        </div>

        <div class="form-group">
            <label>Stock</label>
            <input
                type="number"
                name="stock"
                value="{{ $product->stock }}"
                required>
        </div>

        <div class="form-group">
            <label>Low Stock Limit</label>
            <input
                type="number"
                name="low_stock_limit"
                value="{{ $product->low_stock_limit }}"
                required>
        </div>

        <div class="form-group">
            <label>Supplier</label>
            <select name="supplier_id" required>
                @foreach($suppliers as $supplier)
                    <option
                        value="{{ $supplier->id }}"
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
                    <option
                        value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Expiration Date</label>
            <input
                type="date"
                name="expiration_date"
                value="{{ $product->expiration_date ? \Carbon\Carbon::parse($product->expiration_date)->format('Y-m-d') : '' }}">
        </div>

    </div>

    <div class="actions">

        <button type="submit" class="btn btn-update">
            Update Product
        </button>

        <a href="/products" class="btn btn-back">
            Back
        </a>

    </div>

</form>

    </div>

</div>

</body>
</html>