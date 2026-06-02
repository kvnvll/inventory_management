<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Activity Logs | KAK Mini Mart</title>

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

/* TOPBAR */

.topbar{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    margin-bottom:25px;
}

.title{
    font-size:30px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    color:#64748b;
    margin-top:5px;
}

/* CARD */

.card{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

/* TABLE */

.table-wrapper{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#0f172a;
    color:white;
}

th{
    padding:15px;
    text-align:left;
    font-size:14px;
}

td{
    padding:15px;
    border-bottom:1px solid #e2e8f0;
    font-size:14px;
    color:#334155;
}

tbody tr:hover{
    background:#f8fafc;
}

.badge{
    background:#dbeafe;
    color:#1d4ed8;
    padding:5px 10px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

/* PAGINATION */

.pagination-wrapper{
    margin-top:25px;
}

.pagination-wrapper svg{
    width:20px;
}

.pagination-wrapper nav{
    display:flex;
    justify-content:center;
}

/* MOBILE */

@media(max-width:768px){

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

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        KAK<br>Mini Mart
    </div>

    <div class="menu">
        <a href="/dashboard">Dashboard</a>
        <a href="/products">Products</a>
        <a href="/categories">Categories</a>
        <a href="/suppliers">Suppliers</a>
        <a href="/analytics">Analytics</a>
        <a href="/activity-logs" class="active">Activity Logs</a>
        <a href="/profile">Settings</a>
    </div>

</div>

<!-- MAIN -->

<div class="main">

    <div class="topbar">

        <div class="title">
            Activity Logs
        </div>

        <div class="subtitle">
            Monitor all actions performed in the system
        </div>

    </div>

    <div class="card">

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Action</th>
                        <th>Description</th>
                        <th>User</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($logs as $log)

                    <tr>

                        <td>#{{ $log->id }}</td>

                        <td>
                            <span class="badge">
                                {{ $log->action }}
                            </span>
                        </td>

                        <td>{{ $log->description }}</td>

                        <td>{{ $log->user_name }}</td>

                        <td>
                            {{ $log->created_at->format('M d, Y h:i A') }}
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" style="text-align:center;">
                            No activity logs found.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="pagination-wrapper">
            {{ $logs->links() }}
        </div>

    </div>

</div>

</body>
</html>