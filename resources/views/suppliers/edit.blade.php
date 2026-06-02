<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Supplier</title>

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
            background:#0f172a;
            color:white;
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
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

        nav .links{
            display:flex;
            gap:18px;
        }

        nav a{
            color:#e2e8f0;
            text-decoration:none;
        }

        .container{
            width:500px;
            margin:50px auto;
            background:white;
            padding:35px;
            border-radius:16px;
            box-shadow:0 4px 20px rgba(0,0,0,0.08);
        }

        h2{
            margin-bottom:25px;
            color:#0f172a;
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #cbd5e1;
            border-radius:8px;
        }

        .actions{
            display:flex;
            gap:10px;
            margin-top:20px;
        }

        .btn{
            padding:12px 18px;
            border:none;
            border-radius:8px;
            color:white;
            text-decoration:none;
            cursor:pointer;
        }

        .btn-update{
            background:#2563eb;
        }

        .btn-back{
            background:#64748b;
        }

    </style>

</head>
<body>

<nav>

    <div class="logo">
        KAK<BR> Mini Mart
    </div>

    <div class="links">
        <a href="/dashboard">Dashboard</a>
        <a href="/products">Products</a>
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

</nav>

<div class="container">

    <h2>Edit Supplier</h2>

    <form action="/suppliers/{{ $supplier->id }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label>Supplier Name</label>

            <input type="text"
                   name="name"
                   value="{{ $supplier->name }}"
                   required>

        </div>

        <div class="form-group">

            <label>Contact</label>

            <input type="text"
                   name="contact"
                   value="{{ $supplier->contact }}"
                   required>

        </div>

        <div class="form-group">

            <label>Address</label>

            <input type="text"
                   name="address"
                   value="{{ $supplier->address }}"
                   required>

        </div>

        <div class="actions">

            <button type="submit"
                    class="btn btn-update">

                Update Supplier

            </button>

            <a href="/suppliers"
               class="btn btn-back">

                Back

            </a>

        </div>

    </form>

</div>

</body>
</html>