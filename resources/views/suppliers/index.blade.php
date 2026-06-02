<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Suppliers | Mini Mart</title>

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

/* SUCCESS */

.success{
    background:#dcfce7;
    color:#166534;
    border-left:5px solid #22c55e;
    padding:15px;
    border-radius:10px;
    margin-bottom:20px;
}

/* HEADER */

.header-card{
    background:white;
    border-radius:20px;
    padding:25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    flex-wrap:wrap;
    gap:15px;
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

.stats{
    background:#eff6ff;
    color:#2563eb;
    padding:12px 18px;
    border-radius:12px;
    font-weight:600;
}

/* BUTTONS */

.btn{
    border:none;
    text-decoration:none;
    cursor:pointer;
    color:white;
    border-radius:10px;
    padding:10px 18px;
    font-size:14px;
    font-weight:500;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-add{
    background:#16a34a;
}

.btn-edit{
    background:#2563eb;
}

.btn-delete{
    background:#dc2626;
}

/* TABLE */

.table-card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.table-header{
    padding:20px 25px;
    border-bottom:1px solid #e2e8f0;
    font-size:18px;
    font-weight:600;
    color:#0f172a;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#f8fafc;
}

th{
    text-align:left;
    padding:18px;
    color:#475569;
    font-size:14px;
    text-transform:uppercase;
}

td{
    padding:18px;
    color:#334155;
    border-top:1px solid #f1f5f9;
}

tbody tr{
    transition:.3s;
}

tbody tr:hover{
    background:#f8fafc;
}

/* BADGE */

.badge{
    background:#dcfce7;
    color:#166534;
    padding:6px 12px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
}

/* ACTIONS */

.actions{
    display:flex;
    gap:10px;
}

/* EMPTY */

.empty{
    text-align:center;
    padding:40px;
    color:#94a3b8;
}

```css
/* EXTRA CONTENT */

.section{
    margin-top:30px;
}

.section-title{
    font-size:22px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:18px;
}

/* SUMMARY */

.summary-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.summary-card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.summary-card h3{
    font-size:34px;
    color:#2563eb;
    margin-bottom:6px;
}

.summary-card p{
    color:#64748b;
}

/* ANALYTICS */

.analytics-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:20px;
}

.panel{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.panel-title{
    font-size:18px;
    font-weight:600;
    margin-bottom:20px;
    color:#0f172a;
}

.metric{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    border-bottom:1px solid #e2e8f0;
}

.metric:last-child{
    border-bottom:none;
}

/* ACTIVITY */

.activity-box{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.activity-item{
    padding:18px 24px;
    display:flex;
    justify-content:space-between;
    border-bottom:1px solid #e2e8f0;
}

.activity-item:last-child{
    border-bottom:none;
}

.activity-item span{
    color:#64748b;
    font-size:13px;
}

/* INSIGHTS */

.insight-card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.insight-card ul{
    padding-left:20px;
}

.insight-card li{
    margin-bottom:12px;
    color:#475569;
}
```


/* RESPONSIVE */

@media(max-width:768px){

    .sidebar{
        display:none;
    }

    .main{
        margin-left:0;
        padding:20px;
    }

    .header-card{
        flex-direction:column;
        align-items:flex-start;
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

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="header-card">

        <div>

            <div class="title">
                Suppliers
            </div>

            <div class="subtitle">
                Manage all supplier information
            </div>

        </div>

        <div style="display:flex;gap:15px;align-items:center;">

            <div class="stats">
                Total: {{ count($suppliers) }}
            </div>

            <a href="/suppliers/create"
               class="btn btn-add">
                + Add Supplier
            </a>

        </div>

    </div>


    <div class="table-card">

        <div class="table-header">
            Supplier List
        </div>

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Supplier Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>

            @forelse($suppliers as $supplier)

                <tr>

                    <td>#{{ $supplier->id }}</td>

                    <td>{{ $supplier->name }}</td>

                    <td>{{ $supplier->contact }}</td>

                    <td>{{ $supplier->address }}</td>

                    <td>
                        <span class="badge">
                            Active
                        </span>
                    </td>

                    <td>

                        <div class="actions">

                            <a href="/suppliers/{{ $supplier->id }}/edit"
                               class="btn btn-edit">
                                Edit
                            </a>

                            <form action="/suppliers/{{ $supplier->id }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Delete this supplier?')">

                                    Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="6" class="empty">
                        No suppliers found.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <!-- SUPPLIER SUMMARY -->

<div class="section">

    <div class="section-title">
        Supplier Overview
    </div>

    <div class="summary-grid">

        <div class="summary-card">
            <h3>{{ count($suppliers) }}</h3>
            <p>Total Suppliers</p>
        </div>

        <div class="summary-card">
            <h3>{{ count($suppliers) }}</h3>
            <p>Active Suppliers</p>
        </div>

        <div class="summary-card">
            <h3>98%</h3>
            <p>Reliability Rate</p>
        </div>

        <div class="summary-card">
            <h3>24h</h3>
            <p>Average Response Time</p>
        </div>

    </div>

</div>

<!-- PERFORMANCE -->

<div class="section">

    <div class="section-title">
        Supplier Performance
    </div>

    <div class="analytics-grid">

        <div class="panel">

            <div class="panel-title">
                Delivery Performance
            </div>

            <div class="metric">
                <span>On-Time Deliveries</span>
                <strong>92%</strong>
            </div>

            <div class="metric">
                <span>Delayed Deliveries</span>
                <strong>6%</strong>
            </div>

            <div class="metric">
                <span>Cancelled Orders</span>
                <strong>2%</strong>
            </div>

        </div>

        <div class="panel">

            <div class="panel-title">
                Supplier Statistics
            </div>

            <div class="metric">
                <span>Top Supplier</span>
                <strong>Main Distributor</strong>
            </div>

            <div class="metric">
                <span>Newest Supplier</span>
                <strong>Latest Partner</strong>
            </div>

            <div class="metric">
                <span>Longest Partnership</span>
                <strong>5 Years</strong>
            </div>

        </div>

    </div>

</div>

<!-- RECENT ACTIVITIES -->

<div class="section">

    <div class="section-title">
        Recent Supplier Activity
    </div>

    <div class="activity-box">

        <div class="activity-item">
            New supplier registered
            <span>Today</span>
        </div>

        <div class="activity-item">
            Supplier profile updated
            <span>Yesterday</span>
        </div>

        <div class="activity-item">
            Purchase order completed
            <span>2 days ago</span>
        </div>

        <div class="activity-item">
            Delivery received
            <span>This week</span>
        </div>

    </div>

</div>

<!-- QUICK INSIGHTS -->

<div class="section">

    <div class="section-title">
        Quick Insights
    </div>

    <div class="insight-card">

        <ul>

            <li>
                {{ count($suppliers) }} suppliers currently support inventory operations.
            </li>

            <li>
                Most deliveries arrive on schedule.
            </li>

            <li>
                Supplier network remains stable and active.
            </li>

            <li>
                No critical supplier disruptions detected.
            </li>

        </ul>

    </div>

</div>
</div>



</body>
</html>