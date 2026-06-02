<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Add Supplier</title>

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
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .logo{
            font-size:24px;
            font-weight:bold;
            color:#38bdf8;
        }

        nav .links{
            display:flex;
            gap:18px;
        }

        nav a{
            color:#e2e8f0;
            text-decoration:none;
            font-size:15px;
            transition:0.3s;
        }

        nav a:hover{
            color:white;
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
            font-size:28px;
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
            color:#334155;
        }

        input{
            width:100%;
            padding:13px;
            border:1px solid #cbd5e1;
            border-radius:8px;
            font-size:14px;
            transition:0.3s;
        }

        input:focus{
            outline:none;
            border-color:#2563eb;
            box-shadow:0 0 0 3px rgba(37,99,235,0.15);
        }

        .actions{
            display:flex;
            gap:12px;
            margin-top:25px;
        }

        .btn{
            padding:12px 20px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            color:white;
            font-size:15px;
            text-decoration:none;
            transition:0.3s;
        }

        .btn:hover{
            transform:translateY(-2px);
        }

        .btn-save{
            background:#16a34a;
        }

        .btn-save:hover{
            background:#15803d;
        }

        .btn-back{
            background:#64748b;
        }

        .btn-back:hover{
            background:#475569;
        }

        .error-box{
            background:#fee2e2;
            color:#991b1b;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        }

        .error-box ul{
            padding-left:20px;
        }

        @media(max-width:600px){

            .container{
                width:95%;
                padding:25px;
            }

            nav{
                flex-direction:column;
                gap:12px;
                text-align:center;
            }

        }

    </style>

</head>
<body>

<nav>

    <div class="logo">
        Mini Mart
    </div>

    <div class="links">
        <a href="/dashboard">Dashboard</a>
        <a href="/products">Products</a>
        <a href="/categories">Categories</a>
        <a href="/suppliers">Suppliers</a>
    </div>

</nav>

<div class="container">

    <h2>Add Supplier</h2>

    @if($errors->any())

        <div class="error-box">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('/suppliers') }}" method="POST">

        @csrf

        <div class="form-group">

            <label>Supplier Name</label>

            <input type="text"
                   name="name"
                   placeholder="Enter supplier name"
                   required>

        </div>

        <div class="form-group">

            <label>Contact</label>

            <input type="text"
                   name="contact"
                   placeholder="Enter contact number"
                   required>

        </div>

        <div class="form-group">

            <label>Address</label>

            <input type="text"
                   name="address"
                   placeholder="Enter supplier address"
                   required>

        </div>

        <div class="actions">

            <button type="submit"
                    class="btn btn-save">

                Save Supplier

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