<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Category</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial,sans-serif;
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
}

.logo{
    font-size:28px;
    font-weight:800;
    text-align:center;
    color:#ffffff;
    margin-bottom:30px;
    padding-bottom:18px;
    border-bottom:1px solid rgba(255,255,255,0.08);
    letter-spacing:1px;
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
    transition:.3s;
}

.menu a:hover{
    background:#1e293b;
}

.active{
    background:#2563eb;
    color:white !important;
}

/* MAIN */

.main{
    margin-left:260px;
    width:100%;
    padding:40px;
}

/* HEADER */

.header{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:white;
    padding:30px;
    border-radius:20px;
    margin-bottom:30px;
    box-shadow:0 8px 20px rgba(37,99,235,.25);
}

.header h1{
    font-size:34px;
}

.header p{
    margin-top:8px;
    opacity:.9;
}

/* CARD */

.card{
    max-width:650px;
    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.card-title{
    font-size:24px;
    font-weight:bold;
    color:#0f172a;
    margin-bottom:25px;
}

/* FORM */

.form-group{
    margin-bottom:25px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#334155;
}

input{
    width:100%;
    padding:14px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    font-size:15px;
    transition:.3s;
}

input:focus{
    outline:none;
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.15);
}

/* ERROR */

.error-box{
    background:#fee2e2;
    color:#991b1b;
    padding:15px;
    border-radius:12px;
    margin-bottom:20px;
}

.error-box ul{
    margin-left:20px;
}

/* BUTTONS */

.actions{
    display:flex;
    gap:12px;
    margin-top:10px;
}

.btn{
    padding:14px 20px;
    border:none;
    border-radius:12px;
    text-decoration:none;
    color:white;
    cursor:pointer;
    font-size:15px;
    font-weight:600;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-save{
    background:linear-gradient(135deg,#16a34a,#15803d);
}

.btn-back{
    background:#64748b;
}

/* INFO BOX */

.tip-box{
    margin-top:25px;
    padding:18px;
    background:#eff6ff;
    border-left:5px solid #2563eb;
    border-radius:12px;
    color:#334155;
}

/* MOBILE */

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

    .actions{
        flex-direction:column;
    }
}

</style>
</head>
<body>

<div class="sidebar">

    <div class="logo">
        KAK<BR> Mini Mart
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

        <a href="/analytics">
            Analytics
        </a>
        <a href="/activity-logs">
    Activity Logs
</a>

        <a href="/profile">
    Settings
</a>

    </div>

</div>

<div class="main">

    <div class="header">

        <h1>📂 Add Category</h1>

        <p>
            Organize products into categories for better inventory management.
        </p>

    </div>

    <div class="card">

        <div class="card-title">
            Category Information
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

        <form action="/categories" method="POST">

            @csrf

            <div class="form-group">

                <label>Category Name</label>

                <input
                    type="text"
                    name="name"
                    placeholder="Example: Beverages"
                    value="{{ old('name') }}"
                    required>

            </div>

            <div class="actions">

                <button
                    type="submit"
                    class="btn btn-save">

                    Save Category

                </button>

                <a
                    href="/categories"
                    class="btn btn-back">

                    Back

                </a>

            </div>

        </form>

        <div class="tip-box">
            Categories help organize products and improve inventory reporting.
        </div>

    </div>

</div>

</body>
</html>