<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Category</title>

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
            font-size:32px;
            color:#0f172a;
        }

        /* FORM */

        .form-container{
            background:white;
            width:600px;
            max-width:100%;
            padding:35px;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,0.08);
        }

        .form-title{
            font-size:24px;
            margin-bottom:25px;
            color:#0f172a;
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
            font-size:15px;
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
            margin-top:10px;
        }

        .btn{
            padding:12px 20px;
            border:none;
            border-radius:8px;
            text-decoration:none;
            color:white;
            cursor:pointer;
            font-size:14px;
            transition:0.3s;
        }

        .btn:hover{
            opacity:0.9;
        }

        .btn-update{
            background:#2563eb;
        }

        .btn-back{
            background:#64748b;
        }

        .error-box{
            background:#fee2e2;
            color:#991b1b;
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

        <div class="topbar">

            <h1>
                Edit Category
            </h1>

        </div>

        <div class="form-container">

            <div class="form-title">
                Update Category
            </div>

            @if($errors->any())

                <div class="error-box">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="/categories/{{ $category->id }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">

                    <label>
                        Category Name
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ $category->name }}"
                           placeholder="Enter category name"
                           required>

                </div>

                <div class="actions">

                    <button type="submit"
                            class="btn btn-update">

                        Update Category

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