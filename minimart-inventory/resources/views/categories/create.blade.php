<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Add Category</title>

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
            padding:40px;
        }

        .topbar{
            margin-bottom:30px;
        }

        .topbar h1{
            font-size:34px;
            color:#0f172a;
        }

        .topbar p{
            color:#64748b;
            margin-top:5px;
        }

        /* FORM CARD */

        .card{
            width:500px;
            background:white;
            padding:35px;
            border-radius:16px;
            box-shadow:0 4px 20px rgba(0,0,0,0.08);
        }

        .card h2{
            margin-bottom:25px;
            color:#1e293b;
        }

        .form-group{
            margin-bottom:22px;
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
            box-shadow:0 0 0 3px rgba(37,99,235,0.1);
        }

        .actions{
            display:flex;
            gap:12px;
            margin-top:15px;
        }

        .btn{
            padding:12px 18px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            color:white;
            font-size:15px;
            text-decoration:none;
            transition:0.3s;
        }

        .btn:hover{
            opacity:0.9;
            transform:translateY(-1px);
        }

        .btn-save{
            background:#16a34a;
        }

        .btn-back{
            background:#64748b;
        }

        .error-box{
            background:#fee2e2;
            color:#991b1b;
            padding:14px;
            border-radius:8px;
            margin-bottom:20px;
        }

        @media(max-width:900px){

            .sidebar{
                display:none;
            }

            .main{
                margin-left:0;
                padding:20px;
            }

            .card{
                width:100%;
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

            <a href="/categories" class="active">
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

            <h1>
                Add Category
            </h1>

            <p>
                Create and organize product categories
            </p>

        </div>

        <div class="card">

            <h2>
                Category Information
            </h2>

            @if($errors->any())

                <div class="error-box">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="/categories" method="POST">

                @csrf

                <div class="form-group">

                    <label>
                        Category Name
                    </label>

                    <input type="text"
                           name="name"
                           placeholder="Enter category name"
                           value="{{ old('name') }}"
                           required>

                </div>

                <div class="actions">

                    <button type="submit"
                            class="btn btn-save">

                        Save Category

                    </button>

                    <a href="/categories"
                       class="btn btn-back">

                        Back

                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>