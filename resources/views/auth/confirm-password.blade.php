<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password | Mini Mart</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f1f5f9;
        }

        .card{
            width:420px;
            background:white;
            padding:40px;
            border-radius:18px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        .logo{
            text-align:center;
            font-size:32px;
            font-weight:bold;
            color:#38bdf8;
            margin-bottom:10px;
        }

        .title{
            text-align:center;
            font-size:24px;
            font-weight:bold;
            color:#0f172a;
            margin-bottom:10px;
        }

        .desc{
            text-align:center;
            color:#64748b;
            margin-bottom:30px;
            font-size:14px;
            line-height:1.6;
        }

        label{
            display:block;
            margin-bottom:8px;
            color:#334155;
            font-size:14px;
            font-weight:600;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #cbd5e1;
            border-radius:10px;
            margin-bottom:20px;
            font-size:14px;
        }

        input:focus{
            outline:none;
            border-color:#2563eb;
        }

        .btn{
            width:100%;
            background:#2563eb;
            color:white;
            border:none;
            padding:13px;
            border-radius:10px;
            font-size:15px;
            cursor:pointer;
            transition:.3s;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        .error{
            color:#dc2626;
            font-size:13px;
            margin-top:-15px;
            margin-bottom:15px;
        }

    </style>

</head>
<body>

<div class="card">

    <div class="logo">
        KAK Mini Mart
    </div>

    <div class="title">
        Confirm Password
    </div>

    <div class="desc">
        This is a secure area of the application.<br>
        Please confirm your password before continuing.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label>Password</label>

        <input
            type="password"
            name="password"
            required
            autocomplete="current-password"
        >

        @error('password')
            <div class="error">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn">
            Confirm Password
        </button>

    </form>

</div>

</body>
</html>