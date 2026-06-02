<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Mart Dashboard</title>

  <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
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
    display:flex;
    flex-direction:column;
    justify-content:space-between;
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
    font-size:15px;
    font-weight:500;
}

.menu a:hover{
    background:rgba(255,255,255,.08);
    color:white;
    transform:translateX(5px);
}

.menu .active{
    background:#2563eb;
    color:white;
}

/* LOGOUT */

.logout-form{
    margin-top:20px;
}

.logout-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#dc2626;
    color:white;
    font-size:14px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.logout-btn:hover{
    background:#b91c1c;
}

/* MAIN */

.main{
    margin-left:270px;
    width:100%;
    padding:35px;
}

/* HEADER CARD */

.topbar{
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

.topbar h1{
    font-size:30px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    color:#64748b;
    margin-top:5px;
    font-size:14px;
}

.admin-box{
    background:#eff6ff;
    color:#2563eb;
    padding:12px 18px;
    border-radius:12px;
    font-size:14px;
    font-weight:600;
}

/* DASHBOARD CARDS */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    margin-bottom:28px;
}

.card{
    position:relative;
    overflow:hidden;

    min-height:160px;
    height:160px;

    border-radius:18px;
    padding:24px;

    color:white;

    display:flex;
    flex-direction:column;
    justify-content:space-between;

    transition:.25s ease;
}

.card-value{
    font-size:48px;
    font-weight:700;
}

.blue{
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
}

.green{
    background:linear-gradient(135deg,#16a34a,#15803d);
}

.orange{
    background:linear-gradient(135deg,#f59e0b,#d97706);
}

.red{
    background:linear-gradient(135deg,#dc2626,#b91c1c);
}

/* CONTENT SECTION */

.info-section{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
}

.info-box,
.quick-box{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.info-box h2,
.quick-box h2{
    color:#0f172a;
    margin-bottom:15px;
    font-size:22px;
}

.info-box p{
    color:#475569;
    line-height:1.8;
}

/* QUICK LINKS */

.quick-links{
    display:flex;
    flex-direction:column;
    gap:12px;
}

.quick-links a{
    text-decoration:none;
    background:#2563eb;
    color:white;
    padding:14px;
    border-radius:12px;
    text-align:center;
    transition:.3s;
    font-size:14px;
    font-weight:500;
}

.quick-links a:hover{
    background:#1d4ed8;
    transform:translateY(-2px);
}

.purple{
    background:linear-gradient(
        135deg,
        #7c3aed,
        #6d28d9
    );
}

.dark{
    background:linear-gradient(
        135deg,
        #334155,
        #1e293b
    );
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

    .topbar{
        flex-direction:column;
        align-items:flex-start;
    }

    .info-section{
        grid-template-columns:1fr;
    }

}

</style>
</head>

    <body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div>

            <div class="logo">
                KAK<BR> Mini Mart
            </div>

            <div class="menu">

                <a href="/dashboard" class="active">
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

                <a href="/analytics">
                    Analytics
                </a>
                <a href="/profile">
        Settings
    </a><a href="/analytics">Analytics</a>

<a href="/activity-logs">
    Activity Logs
</a>


            </div>

        </div>

        <form method="POST"
            action="{{ route('logout') }}"
            class="logout-form">

            @csrf

            <button type="submit"
                    class="logout-btn">

                Logout

            </button>

        </form>

    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- HEADER -->

        <div class="topbar">

            <div>

                <h1>
                    Dashboard
                </h1>

                <div class="subtitle">
                    Mini Mart Inventory Management System
                </div>

            </div>

            <div class="admin-box">
                Administrator
            </div>

        </div>
<div class="cards">

    <div class="card purple">
    <div class="card-title">Expired Products</div>
    <div class="card-value">
        {{ $expiredProducts ?? 0 }}
    </div>
</div>

<div class="card dark">
    <div class="card-title">Inventory Value</div>
    <div class="card-value">
        ₱{{ number_format($inventoryValue ?? 0, 2) }}
    </div>
</div>

<div class="card blue">
    <div class="card-title">Total Products</div>
    <div class="card-value">
        {{ $totalProducts ?? 0 }}
    </div>
</div>

<div class="card green">
    <div class="card-title">Total Categories</div>
    <div class="card-value">
        {{ $totalCategories ?? 0 }}
    </div>
</div>

<div class="card orange">
    <div class="card-title">Low Stock Items</div>
    <div class="card-value">
        {{ $lowStock ?? 0 }}
    </div>
</div>

<div class="card red">
    <div class="card-title">Total Suppliers</div>
    <div class="card-value">
        {{ $totalSuppliers ?? 0 }}
    </div>
</div>

</div>

        <!-- SYSTEM SUMMARY -->

        <div class="info-box" style="margin-bottom:25px;">

            <h2>
                System Summary
            </h2>

            <p>

                Products:
                <strong>{{ $totalProducts ?? 0 }}</strong>

                |

                Categories:
                <strong>{{ $totalCategories ?? 0 }}</strong>

                |

                Suppliers:
                <strong>{{ $totalSuppliers ?? 0 }}</strong>

                |

                Low Stock:
                <strong>{{ $lowStock ?? 0 }}</strong>

            </p>

        </div>


    <!-- DASHBOARD CONTENT -->

    <div class="info-section">

        <!-- LEFT SIDE -->

        <div>

            <div class="info-box" style="margin-bottom:20px;">

                <h2>
                    Recent Activity
                </h2>

                <p>
                    ✓ New products added to inventory today.
                </p>

                <p>
                    ✓ Supplier records successfully updated.
                </p>

                <p>
                    ✓ Inventory analysis generated automatically.
                </p>

                <p>
                    ✓ Low stock items detected and flagged.
                </p>

            </div>

            <div class="info-box">

                <h2>
                    Inventory Health
                </h2>

                <p>

                    The inventory currently contains
                    <strong>{{ $totalProducts ?? 0 }}</strong>
                    registered products across
                    <strong>{{ $totalCategories ?? 0 }}</strong>
                    categories.

                </p>

                <br>

                <p>

                    There are currently
                    <strong>{{ $lowStock ?? 0 }}</strong>
                    low stock products requiring attention.

                </p>

                <br>

                <p>

                    Supplier network consists of
                    <strong>{{ $totalSuppliers ?? 0 }}</strong>
                    active suppliers supporting inventory operations.

                </p>

            </div>

        </div>

        <!-- RIGHT SIDE -->

        <div>

            <div class="quick-box" style="margin-bottom:20px;">

                <h2>
                    Quick Actions
                </h2>

                <div class="quick-links">

                    <a href="/products/create">
                        Add Product
                    </a>

                    <a href="/categories/create">
                        Add Category
                    </a>

                    <a href="/suppliers/create">
                        Add Supplier
                    </a>

                </div>

            </div>

            <div class="quick-box">

                <h2>
                    System Status
                </h2>

                <div style="display:flex;flex-direction:column;gap:12px;">

                    <div>
                        🟢 Inventory System Online
                    </div>

                    <div>
                        🟢 Database Connected
                    </div>

                    <div>
                        🟢 Supplier Records Active
                    </div>

                    <div>
                        🟢 Daily Monitoring Enabled
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- PERFORMANCE SECTION -->

    <div class="info-box" style="margin-top:25px;">

        <h2>
            Store Performance Snapshot
        </h2>

        <p>

            Total Products:
            <strong>{{ $totalProducts ?? 0 }}</strong>

        </p>

        <br>

        <p>

            Active Suppliers:
            <strong>{{ $totalSuppliers ?? 0 }}</strong>

        </p>

        <br>

        <p>

            Product Categories:
            <strong>{{ $totalCategories ?? 0 }}</strong>

        </p>

        <br>

        <p>

            Low Stock Alerts:
            <strong>{{ $lowStock ?? 0 }}</strong>

        </p>

    </div>

    <!-- REMINDERS -->

    <div class="info-box" style="margin-top:25px;">

        <h2>
            Reminders
        </h2>

        <p>
            • Review low stock products regularly.
        </p>

        <p>
            • Keep supplier information updated.
        </p>

        <p>
            • Monitor inventory analytics for trends.
        </p>

        <p>
            • Perform weekly inventory audits.
        </p>

    </div>

    </body>
    </html>