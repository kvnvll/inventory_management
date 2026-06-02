<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Settings</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#f8fafc,#e2e8f0);
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
    gap:12px;
}

.menu a{
    color:#cbd5e1;
    text-decoration:none;
    padding:14px 16px;
    border-radius:12px;
    transition:.3s;
}

.menu a:hover{
    background:#1e293b;
    color:white;
}

.menu .active{
    background:#2563eb;
    color:white;
}

/* MAIN */

.main{
    margin-left:260px;
    width:100%;
    padding:40px;
}

.page-title{
    font-size:34px;
    color:#0f172a;
    font-weight:bold;
    margin-bottom:8px;
}

.subtitle{
    color:#64748b;
    margin-bottom:30px;
}

/* PROFILE HEADER */

.profile-card{
    background:linear-gradient(135deg,#2563eb,#3b82f6,#60a5fa);
    color:white;
    padding:35px;
    border-radius:28px;
    margin-bottom:30px;
    box-shadow:0 20px 40px rgba(37,99,235,.25);
    position:relative;
    overflow:hidden;
}

.profile-card::after{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background:rgba(255,255,255,.12);
    border-radius:50%;
    right:-80px;
    top:-80px;
}

.avatar{
    width:85px;
    height:85px;
    border-radius:50%;
    background:white;
    color:#2563eb;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:34px;
    font-weight:700;
    margin-bottom:18px;
    border:4px solid rgba(255,255,255,.4);
}

.profile-name{
    font-size:24px;
    font-weight:bold;
}

.profile-email{
    opacity:.9;
}

/* SETTINGS CARDS */

.settings-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(450px,1fr));
    gap:25px;
}
.card{
    background:white;
    border-radius:24px;
    padding:35px;
    box-shadow:0 15px 35px rgba(15,23,42,.08);
    border:1px solid #e2e8f0;
    transition:.3s;
}

.card:hover{
    transform:translateY(-3px);
}

.card h2{
    color:#0f172a;
    margin-bottom:8px;
}

.card p{
    color:#64748b;
    margin-bottom:20px;
}

/* FORM */

label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#334155;
}

input{
    width:100%;
    padding:15px 18px;
    border:2px solid #e2e8f0;
    border-radius:14px;
    margin-bottom:18px;
    transition:.3s;
    font-size:14px;
}

input:focus{
    outline:none;
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.12);
}

.btn{
    border:none;
    padding:14px 24px;
    border-radius:14px;
    color:white;
    cursor:pointer;
    font-weight:600;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-primary{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
}

.btn-success{
    background:linear-gradient(135deg,#16a34a,#15803d);
}

.btn-danger{
    background:linear-gradient(135deg,#dc2626,#b91c1c);
}

.page-title{
    font-size:38px;
    color:#0f172a;
    font-weight:700;
    margin-bottom:8px;
}

.subtitle{
    color:#64748b;
    font-size:15px;
    margin-bottom:30px;
}

/* BUTTONS */

button,
.btn{
    border:none;
    cursor:pointer;
    font-weight:600;
    font-size:14px;
    padding:14px 24px;
    border-radius:14px;
    transition:.3s ease;
}

/* SAVE BUTTON */

.save-btn,
.bg-blue-600{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color: blue;
    box-shadow:0 8px 20px rgba(37,99,235,.25);
}

.save-btn:hover,
.bg-blue-600:hover{
    transform:translateY(-2px);
    box-shadow:0 12px 25px rgba(37,99,235,.35);
}

/* UPDATE BUTTON */

.bg-green-600{
    background:linear-gradient(135deg,#16a34a,#15803d);
    color:white;
    box-shadow:0 8px 20px rgba(22,163,74,.25);
}

.bg-green-600:hover{
    transform:translateY(-2px);
    box-shadow:0 12px 25px rgba(22,163,74,.35);
}

/* DELETE BUTTON */

.delete-btn,
.bg-red-600{
    background:linear-gradient(135deg,#dc2626,#b91c1c);
    color:white;
    box-shadow:0 8px 20px rgba(220,38,38,.25);
}

.delete-btn:hover,
.bg-red-600:hover{
    transform:translateY(-2px);
    box-shadow:0 12px 25px rgba(220,38,38,.35);
}

/* CANCEL BUTTON */

.cancel-btn{
    background:#e2e8f0;
    color:#334155;
}

.cancel-btn:hover{
    background:#cbd5e1;
}

/* RESPONSIVE */

@media(max-width:900px){

    .sidebar{
        display:none;
    }

    .main{
        margin-left:0;
        padding:20px;
    }

}

</style>
</head>
<body>

<div class="sidebar">

    <div class="logo">
        KAK Mini Mart
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

        <a href="/suppliers">
            Suppliers
        </a>

        <a href="/profile" class="active">
            Settings
        </a>

    </div>

</div>

<div class="main">

    <div class="page-title">
        Account Settings
    </div>

    <div class="subtitle">
        Manage your profile and security preferences
    </div>

    <div class="profile-card">

        <div class="avatar">
            {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        </div>

        <div class="profile-name">
            {{ Auth::user()->name }}
        </div>

        <div class="profile-email">
            {{ Auth::user()->email }}
        </div>

    </div>

    <div class="settings-grid">

        <div class="card">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div class="card">
            @include('profile.partials.update-password-form')
        </div>

        <div class="card">
            @include('profile.partials.delete-user-form')
        </div>

    </div>

</div>

</body>
</html>