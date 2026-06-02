<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mini Mart Login</title>

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
    height:100vh;
}

.login-container{
    width:900px;
    height:500px;
    display:flex;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
    background:white;
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
    font-size:42px;
    color:#38bdf8;
    margin-bottom:15px;
}

.left p{
    color:#cbd5e1;
    line-height:1.6;
}

.right{
    width:55%;
    padding:60px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.title{
    font-size:32px;
    font-weight:bold;
    margin-bottom:30px;
    color:#0f172a;
}

.input-group{
    margin-bottom:20px;
}

.input-group label{
    display:block;
    margin-bottom:8px;
    color:#334155;
    font-weight:600;
}

.input-group input{
    width:100%;
    padding:14px;
    border:1px solid #cbd5e1;
    border-radius:10px;
    font-size:15px;
}

.input-group input:focus{
    outline:none;
    border-color:#2563eb;
}

.login-btn{
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

.login-btn:hover{
    background:#1d4ed8;
}

.register-link{
    margin-top:15px;
    text-align:center;
}

.register-link a{
    color:#2563eb;
    text-decoration:none;
}

/* NEW: forgot password */
.forgot-link{
    margin-top:10px;
    text-align:center;
    font-size:14px;
}

.forgot-link a{
    color:#64748b;
    text-decoration:none;
}

.forgot-link a:hover{
    color:#2563eb;
}

</style>

</head>
<body>

<div class="login-container">

    <div class="left">
        <h1>KAK Mini Mart</h1>
        <p>
            Inventory Management System
            <br><br>
            Manage products, suppliers,
            categories, stock levels,
            and expiration dates easily.
        </p>
    </div>

    <div class="right">

        <div class="title">
            Login
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>

            <!-- FORGOT PASSWORD -->
            <div class="forgot-link">
                <a href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            </div>

            <div class="register-link">
                <a href="{{ route('register') }}">
                    Create Account
                </a>
            </div>

        </form>

    </div>

</div>

</body>
</html>