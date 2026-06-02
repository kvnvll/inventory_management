<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mini Mart Register</title>

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
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.register-container{
    width:950px;
    display:flex;
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.left{
    width:45%;
    background:#0f172a;
    color:white;
    padding:50px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.left h1{
    color:#38bdf8;
    font-size:40px;
    margin-bottom:15px;
}

.left p{
    color:#cbd5e1;
    line-height:1.8;
}

.right{
    width:55%;
    padding:50px;
}

.title{
    font-size:32px;
    font-weight:bold;
    color:#0f172a;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:18px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#334155;
}

.form-group input{
    width:100%;
    padding:14px;
    border:1px solid #cbd5e1;
    border-radius:10px;
    font-size:14px;
}

.form-group input:focus{
    outline:none;
    border-color:#2563eb;
}

.error{
    color:#dc2626;
    font-size:13px;
    margin-top:5px;
}

.btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#2563eb;
    color:white;
    font-size:15px;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background:#1d4ed8;
}

.login-link{
    text-align:center;
    margin-top:20px;
}

.login-link a{
    color:#2563eb;
    text-decoration:none;
}

</style>

</head>
<body>

<div class="register-container">

```
<div class="left">

    <h1>Mini Mart</h1>

    <p>
        Inventory Management System
        <br><br>
        Create an account to manage products,
        suppliers, categories, stock levels,
        and expiration monitoring.
    </p>

</div>

<div class="right">

    <div class="title">
        Create Account
    </div>

    <form method="POST" action="{{ route('register') }}">

        @csrf

        <div class="form-group">

            <label>Name</label>

            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   required>

            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label>Email</label>

            <input type="email"
                   name="email"
                   value="{{ old('email') }}"
                   required>

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label>Password</label>

            <input type="password"
                   name="password"
                   required>

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label>Confirm Password</label>

            <input type="password"
                   name="password_confirmation"
                   required>

        </div>

        <button type="submit" class="btn">
            Register
        </button>

        <div class="login-link">

            <a href="{{ route('login') }}">
                Already have an account? Login
            </a>

        </div>

    </form>

</div>
```

</div>

</body>
</html>
