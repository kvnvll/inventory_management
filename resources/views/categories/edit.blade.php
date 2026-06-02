<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Category | Mini Mart</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

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
    padding:14px 16px;
    border-radius:12px;
    transition:.3s;
}

.menu a:hover{
    background:rgba(255,255,255,0.08);
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
.header{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    margin-bottom:25px;
}

.header h1{
    font-size:28px;
    font-weight:700;
    color:#0f172a;
}

.header p{
    color:#64748b;
    margin-top:5px;
}

/* CARD */
.card{
    background:white;
    max-width:600px;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.06);
}

/* TITLE */
.card-title{
    font-size:20px;
    font-weight:600;
    margin-bottom:20px;
    color:#0f172a;
}

/* FORM */
.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:500;
    color:#334155;
}

input{
    width:100%;
    padding:14px;
    border-radius:12px;
    border:1px solid #e2e8f0;
    outline:none;
    transition:.3s;
    font-size:14px;
}

input:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 3px rgba(37,99,235,0.15);
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
    margin-left:18px;
}

/* BUTTONS */
.actions{
    display:flex;
    gap:12px;
    margin-top:20px;
}

.btn{
    border:none;
    padding:12px 18px;
    border-radius:12px;
    cursor:pointer;
    font-weight:600;
    text-decoration:none;
    color:white;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-update{
    background:#2563eb;
}

.btn-update:hover{
    background:#1d4ed8;
}

.btn-back{
    background:#64748b;
}

.btn-back:hover{
    background:#475569;
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

    .card{
        width:100%;
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
        <a href="/products">Products</a>
        <a href="/categories" class="active">Categories</a>
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

    <!-- HEADER -->
    <div class="header">
        <h1>Edit Category</h1>
        <p>Update category information</p>
    </div>

    <!-- FORM CARD -->
    <div class="card">

        <div class="card-title">
            Category Details
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

        <form action="/categories/{{ $category->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Category Name</label>
                <input type="text"
                       name="name"
                       value="{{ $category->name }}"
                       required>
            </div>

            <div class="actions">

                <button type="submit" class="btn btn-update">
                    Update Category
                </button>

                <a href="/categories" class="btn btn-back">
                    Back
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>