```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Supplier | Mini Mart</title>

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

.header-card{
    background:white;
    border-radius:20px;
    padding:25px;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.title{
    font-size:30px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    margin-top:5px;
    color:#64748b;
}

/* FORM CARD */

.form-card{
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    max-width:700px;
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
    padding:14px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    font-size:14px;
    transition:.3s;
}

input:focus{
    outline:none;
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.1);
}

/* BUTTONS */

.actions{
    display:flex;
    gap:12px;
    margin-top:25px;
}

.btn{
    border:none;
    text-decoration:none;
    cursor:pointer;
    color:white;
    border-radius:10px;
    padding:12px 20px;
    font-size:14px;
    font-weight:500;
    transition:.3s;
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

/* ERRORS */

.error-box{
    background:#fee2e2;
    color:#991b1b;
    border-left:5px solid #dc2626;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

.error-box ul{
    padding-left:20px;
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

        <a href="/dashboard">
            Dashboard
        </a>

        <a href="/products">
            Products
        </a>

        <a href="/categories">
            Categories
        </a>

        <a href="/suppliers" class="active">
            Suppliers
        </a>

        <a href="/analytics">
            Analytics
        </a>
        <a href="/profile">
    Settings
</a>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <div class="header-card">

        <div class="title">
            Add Supplier
        </div>

        <div class="subtitle">
            Create a new supplier record
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

                <label>Contact Number</label>

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

</div>

</body>
</html>
