<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Products | Mini Mart</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://unpkg.com/html5-qrcode"></script>

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

/* HEADER */
.topbar{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    flex-wrap:wrap;
    gap:15px;
}

.title{
    font-size:30px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    color:#64748b;
    margin-top:5px;
}

/* BUTTONS */
.btn{
    border:none;
    padding:12px 18px;
    border-radius:12px;
    cursor:pointer;
    color:white;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-add{ background:#16a34a; }
.search-btn{ background:#2563eb; }
.btn-edit{ background:#3b82f6; }
.btn-delete{ background:#ef4444; }

/* STATS */
.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:25px;
}

.stat-card{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.stat-title{
    color:#64748b;
    font-size:14px;
}

.stat-value{
    font-size:32px;
    font-weight:700;
    margin-top:10px;
    color:#0f172a;
}

/* SEARCH */
.search-card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    margin-bottom:25px;
}

.search-box{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
}

.search-box input{
    flex:1;
    min-width:250px;
    padding:14px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    outline:none;
}

.search-box input:focus{
    border-color:#2563eb;
}

/* TABLE */
.table-card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#0f172a;
    color:white;
    padding:18px;
    text-align:left;
    font-size:14px;
}

td{
    padding:18px;
    border-bottom:1px solid #f1f5f9;
}

tr:hover{
    background:#f8fafc;
}

/* BADGES */
.stock-good{
    background:#dcfce7;
    color:#166534;
    padding:6px 12px;
    border-radius:30px;
    font-weight:600;
}

.stock-low{
    background:#fee2e2;
    color:#dc2626;
    padding:6px 12px;
    border-radius:30px;
    font-weight:600;
}

.expired{
    background:#dc2626;
    color:white;
    padding:6px 10px;
    border-radius:20px;
    font-size:12px;
}

.expiring{
    background:#f59e0b;
    color:white;
    padding:6px 10px;
    border-radius:20px;
    font-size:12px;
}

/* ACTIONS */
.actions{
    display:flex;
    gap:10px;
}

/* EMPTY */
.empty{
    text-align:center;
    padding:40px;
    color:#94a3b8;
}

/* SCANNER */
#reader{
    max-width:400px;
    margin-top:15px;
}


```css
/* LOW STOCK ALERTS */

.alert-card{
    background:white;
    border-radius:20px;
    padding:25px;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    border-left:6px solid #dc2626;
}

.alert-header h3{
    color:#dc2626;
    margin-bottom:5px;
}

.alert-header p{
    color:#64748b;
    font-size:14px;
}

.alert-list{
    margin-top:20px;
    display:flex;
    flex-direction:column;
    gap:12px;
}

.alert-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:14px 16px;
    background:#fef2f2;
    border-radius:12px;
}

.alert-category{
    font-size:12px;
    color:#64748b;
    margin-top:3px;
}

.alert-stock{
    background:#dc2626;
    color:white;
    padding:6px 12px;
    border-radius:30px;
    font-weight:600;
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

    .actions{
        flex-direction:column;
    }
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        KAK<BR> Mini Mart
    </div>

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

@if(session('success'))
    <div style="background:#dcfce7;color:#166534;padding:15px;border-radius:12px;margin-bottom:20px;">
        {{ session('success') }}
    </div>
@endif

<!-- HEADER -->
<div class="topbar">

    <div>
        <div class="title">Product Inventory</div>
        <div class="subtitle">Manage all products efficiently</div>
    </div>

    <a href="/products/create" class="btn btn-add">
        + Add Product
    </a>


<form action="/imports/products"
      method="POST"
      enctype="multipart/form-data"
      style="display:flex;gap:10px;align-items:center;">

    @csrf

    <input
        type="file"
        name="file"
        required
        accept=".xlsx,.xls,.csv"
    >

    <button
        type="submit"
        class="btn search-btn">
        Import Excel
    </button>

</form>


</div>



<!-- STATS -->
<div class="stats">

    <div class="stat-card">
        <div class="stat-title">Total Products</div>
        <div class="stat-value">{{ $products->count() }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-title">Low Stock</div>
        <div class="stat-value">{{ $products->where('stock','<=',10)->count() }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-title">Categories</div>
        <div class="stat-value">{{ \App\Models\Category::count() }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-title">Suppliers</div>
        <div class="stat-value">{{ \App\Models\Supplier::count() }}</div>
    </div>

</div>

<!-- LOW STOCK ALERTS -->

@if($products->where('stock', '<=', 10)->count() > 0)

<div class="alert-card">

    <div class="alert-header">

        <div>
            <h3>⚠ Low Stock Alerts</h3>
            <p>
                {{ $products->where('stock', '<=', 10)->count() }}
                product(s) need restocking
            </p>
        </div>

    </div>

    <div class="alert-list">

        @foreach($products->where('stock', '<=', 10)->take(5) as $product)

        <div class="alert-item">

            <div>
                <strong>{{ $product->name }}</strong>
                <div class="alert-category">
                    {{ $product->category->name ?? 'No Category' }}
                </div>
            </div>

            <div class="alert-stock">
                {{ $product->stock }} left
            </div>

        </div>

        @endforeach

    </div>

</div>

@endif


<!-- SEARCH + SCAN -->
<div class="search-card">

    <form method="GET" action="/products">

        <div class="search-box">

            <input type="text"
                   name="search"
                   placeholder="Search product or barcode..."
                   value="{{ $search ?? '' }}">

            <button class="btn search-btn" type="submit">
                Search
            </button>

        </div>

    </form>

    <div style="margin-top:25px;">
        <h3>Scan Barcode</h3>
        <div id="reader"></div>
    </div>

</div>




<!-- TABLE -->
<div class="table-card">

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

    <td><strong>{{ $product->name }}</strong></td>

    <td>
        {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!}
        <div style="font-size:12px">{{ $product->barcode }}</div>
    </td>

    <td>₱{{ number_format($product->price,2) }}</td>

    <td>
        @if($product->stock <= 10)
            <span class="stock-low">{{ $product->stock }}</span>
        @else
            <span class="stock-good">{{ $product->stock }}</span>
        @endif
    </td>

    <td>{{ $product->category->name ?? 'No Category' }}</td>

    <td>
        @if($product->expiration_date)

            {{ $product->expiration_date }}

            @php
                $today = \Carbon\Carbon::today();
                $exp = \Carbon\Carbon::parse($product->expiration_date);
            @endphp

            @if($exp->isPast())
                <span class="expired">EXPIRED</span>
            @elseif($today->diffInDays($exp,false) <= 7)
                <span class="expiring">EXPIRING</span>
            @endif

        @else
            No Expiration
        @endif
    </td>

    <td>{{ $product->supplier->name ?? 'No Supplier' }}</td>

    <td class="actions">

        <a href="/products/{{ $product->id }}/edit"
           class="btn btn-edit">Edit</a>

        <form method="POST" action="/products/{{ $product->id }}">
            @csrf
            @method('DELETE')

            <button class="btn btn-delete"
                    onclick="return confirm('Delete product?')">
                Delete
            </button>
        </form>

    </td>

</tr>

@empty

<tr>
    <td colspan="9" class="empty">No products found.</td>
</tr>

@endforelse

</tbody>

</table>

</div>


</div>

</body>
</html>