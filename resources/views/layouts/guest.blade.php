<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Mini Mart Inventory System</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>

    body{
        margin:0;
        font-family:Arial,sans-serif;
        background:#f1f5f9;
    }

    .container{
        min-height:100vh;
        display:flex;
        align-items:center;
        justify-content:center;
        padding:20px;
    }

    .auth-card{
        width:950px;
        min-height:550px;
        display:flex;
        background:white;
        border-radius:20px;
        overflow:hidden;
        box-shadow:0 10px 30px rgba(0,0,0,.08);
    }

    .left-panel{
        width:40%;
        background:#0f172a;
        color:white;
        padding:50px;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .left-panel h1{
        color:#38bdf8;
        font-size:42px;
        margin-bottom:15px;
    }

    .left-panel p{
        color:#cbd5e1;
        line-height:1.8;
    }

    .right-panel{
        width:60%;
        padding:50px;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .welcome{
        font-size:30px;
        font-weight:bold;
        color:#0f172a;
        margin-bottom:10px;
    }

    .subtitle{
        color:#64748b;
        margin-bottom:30px;
    }

    input{
        border-radius:10px !important;
    }

    button{
        border-radius:10px !important;
    }

    @media(max-width:900px){

        .auth-card{
            flex-direction:column;
            width:100%;
        }

        .left-panel,
        .right-panel{
            width:100%;
        }

    }

</style>

</head>

<body>

<div class="container">

<div class="auth-card">

    <div class="left-panel">

        <h1>KAK<BR> Mini Mart</h1>

        <p>
            Inventory Management System
            <br><br>
            Manage products, suppliers,
            categories, stock levels,
            low stock alerts and inventory
            operations efficiently.
        </p>

    </div>

    <div class="right-panel">

        <div class="welcome">
            Welcome
        </div>

        <div class="subtitle">
            Sign in to continue using the system.
        </div>

        {{ $slot }}

    </div>

</div>
```

</div>

</body>
</html>
