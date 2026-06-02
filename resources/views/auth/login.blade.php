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
    font-family:'Segoe UI',sans-serif;
    background:#f1f5f9;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    padding:20px;
}

/* MAIN CARD */
.login-container{
    width:1000px;
    min-height:550px;
    display:flex;
    background:white;
    border-radius:24px;
    overflow:hidden;
    box-shadow:
        0 20px 50px rgba(15,23,42,.15),
        0 5px 15px rgba(15,23,42,.05);
    animation:float 5s ease-in-out infinite;
}

@keyframes float{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-6px);
    }
}

/* LEFT SIDE */
.left{
    width:45%;
    background:linear-gradient(
        135deg,
        #0f172a,
        #1e293b
    );
    color:white;
    padding:60px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    position:relative;
    overflow:hidden;
}

.left::before{
    content:"";
    position:absolute;
    width:280px;
    height:280px;
    border-radius:50%;
    background:rgba(56,189,248,.08);
    top:-80px;
    right:-80px;
}

.left::after{
    content:"";
    position:absolute;
    width:200px;
    height:200px;
    border-radius:50%;
    background:rgba(56,189,248,.05);
    bottom:-70px;
    left:-70px;
}

.left h1{
    font-size:46px;
    color:#38bdf8;
    margin-bottom:20px;
    position:relative;
    z-index:2;
}

.left p{
    color:#cbd5e1;
    line-height:1.8;
    font-size:16px;
    position:relative;
    z-index:2;
}

/* FEATURE LIST */
.feature-list{
    margin-top:35px;
    position:relative;
    z-index:2;
}

.feature-list div{
    margin-bottom:14px;
    color:#e2e8f0;
    font-size:15px;
}

/* RIGHT SIDE */
.right{
    width:55%;
    padding:70px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

/* BADGE */
.badge{
    display:inline-block;
    width:max-content;
    background:#dbeafe;
    color:#2563eb;
    padding:8px 14px;
    border-radius:999px;
    font-size:13px;
    font-weight:600;
    margin-bottom:15px;
}

/* TITLES */
.title{
    font-size:36px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:8px;
}

.subtitle{
    color:#64748b;
    margin-bottom:35px;
    font-size:15px;
}

/* FORM */
form{
    width:100%;
}

.input-group{
    margin-bottom:20px;
}

.input-group label{
    display:block;
    margin-bottom:8px;
    color:#334155;
    font-size:14px;
    font-weight:600;
}

.input-group input{
    width:100%;
    padding:15px 18px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    background:#f8fafc;
    font-size:15px;
    transition:.3s;
}

.input-group input:focus{
    outline:none;
    border-color:#2563eb;
    background:white;
    box-shadow:0 0 0 4px rgba(37,99,235,.12);
}

/* REMEMBER */
.remember{
    display:flex;
    align-items:center;
    gap:8px;
    margin-bottom:20px;
    color:#475569;
    font-size:14px;
}

.remember input{
    accent-color:#2563eb;
}

/* BUTTON */
.login-btn{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#2563eb;
    color:white;
    font-size:15px;
    font-weight:700;
    cursor:pointer;
    transition:.3s;
}

.login-btn:hover{
    background:#1d4ed8;
    transform:translateY(-2px);
    box-shadow:0 12px 25px rgba(37,99,235,.25);
}

/* LINKS */
.forgot-link{
    text-align:center;
    margin-top:18px;
}

.forgot-link a{
    color:#64748b;
    text-decoration:none;
    font-size:14px;
    transition:.3s;
}

.forgot-link a:hover{
    color:#2563eb;
}

/* DIVIDER */
.divider{
    display:flex;
    align-items:center;
    gap:12px;
    margin:25px 0;
    color:#94a3b8;
    font-size:13px;
}

.divider::before,
.divider::after{
    content:"";
    flex:1;
    height:1px;
    background:#e2e8f0;
}

/* REGISTER */
.register-link{
    text-align:center;
}

.register-link a{
    color:#2563eb;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.register-link a:hover{
    color:#1d4ed8;
}

/* RESPONSIVE */
@media(max-width:900px){

    .login-container{
        width:100%;
        flex-direction:column;
        min-height:auto;
    }

    .left,
    .right{
        width:100%;
    }

    .left{
        padding:40px;
    }

    .right{
        padding:40px;
    }

    .title{
        font-size:30px;
    }

    .left h1{
        font-size:36px;
    }
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

        <div class="badge">
    Welcome Back
</div>

<div class="title">
    Sign In
</div>

<div class="subtitle">
    Access your inventory dashboard
</div>

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