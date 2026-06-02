<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Mart Dashboard</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#eef2f7;
            display:flex;
        }

        /* SIDEBAR */

        .sidebar{
            width:260px;
            height:100vh;
            background:linear-gradient(to bottom,#0f172a,#1e293b);
            position:fixed;
            left:0;
            top:0;
            padding:25px 20px;
            color:white;
            box-shadow:4px 0 12px rgba(0,0,0,0.1);
        }

        .logo{
            font-size:30px;
            font-weight:bold;
            margin-bottom:45px;
            text-align:center;
            color:#38bdf8;
            letter-spacing:1px;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:12px;
        }

        .menu a{
            text-decoration:none;
            color:#cbd5e1;
            padding:15px 18px;
            border-radius:12px;
            transition:0.3s;
            font-size:15px;
            font-weight:500;
        }

        .menu a:hover{
            background:#334155;
            color:white;
            transform:translateX(5px);
        }

        .menu .active{
            background:#2563eb;
            color:white;
            box-shadow:0 4px 10px rgba(37,99,235,0.4);
        }

        /* MAIN */

        .main{
            margin-left:260px;
            width:100%;
            padding:35px;
        }

        /* TOPBAR */

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:35px;
        }

        .topbar h1{
            font-size:34px;
            color:#0f172a;
        }

        .subtitle{
            color:#64748b;
            margin-top:5px;
            font-size:15px;
        }

        .admin-box{
            background:white;
            padding:12px 18px;
            border-radius:12px;
            box-shadow:0 2px 8px rgba(0,0,0,0.08);
            font-size:14px;
            color:#334155;
        }

        /* CARDS */

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
            gap:22px;
            margin-bottom:35px;
        }

        .card{
            background:white;
            border-radius:18px;
            padding:28px;
            position:relative;
            overflow:hidden;
            box-shadow:0 4px 12px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-6px);
        }

        .card::after{
            content:'';
            position:absolute;
            right:-30px;
            bottom:-30px;
            width:120px;
            height:120px;
            background:rgba(255,255,255,0.1);
            border-radius:50%;
        }

        .card-title{
            color:#e2e8f0;
            margin-bottom:14px;
            font-size:15px;
        }

        .card-value{
            font-size:42px;
            font-weight:bold;
            color:white;
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

        /* INFO BOX */

        .info-section{
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:22px;
        }

        .info-box,
        .quick-box{
            background:white;
            border-radius:18px;
            padding:28px;
            box-shadow:0 4px 12px rgba(0,0,0,0.08);
        }

        .info-box h2,
        .quick-box h2{
            margin-bottom:15px;
            color:#0f172a;
        }

        .info-box p{
            color:#475569;
            line-height:1.8;
        }

        .quick-links{
            display:flex;
            flex-direction:column;
            gap:12px;
            margin-top:15px;
        }

        .quick-links a{
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:12px;
            border-radius:10px;
            text-align:center;
            transition:0.3s;
            font-size:14px;
        }

        .quick-links a:hover{
            background:#1d4ed8;
        }

        /* RESPONSIVE */

        @media(max-width:900px){

            .sidebar{
                width:220px;
            }

            .main{
                margin-left:220px;
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

        <div class="logo">
            Mini Mart
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

        </div>

    </div>

    <!-- MAIN -->

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <div>

                <h1>Dashboard</h1>

                <div class="subtitle">
                    Mini Mart Inventory Management System
                </div>

            </div>

            <div class="admin-box">
                Admin Panel
            </div>

        </div>

        <!-- CARDS -->

        <div class="cards">

            <div class="card blue">

                <div class="card-title">
                    Total Products
                </div>

                <div class="card-value">
                    {{ $totalProducts }}
                </div>

            </div>

            <div class="card green">

                <div class="card-title">
                    Total Categories
                </div>

                <div class="card-value">
                    {{ $totalCategories }}
                </div>

            </div>

            <div class="card orange">

                <div class="card-title">
                    Low Stock Items
                </div>

                <div class="card-value">
                    {{ $lowStock }}
                </div>

            </div>

            <div class="card red">

                <div class="card-title">
                    Total Suppliers
                </div>

                <div class="card-value">
                    {{ $totalSuppliers }}
                </div>

            </div>

        </div>

        <!-- LOWER SECTION -->

        <div class="info-section">

            <div class="info-box">

                <h2>
                    Welcome Back 👋
                </h2>

                <p>
                    Manage your mini mart products, suppliers, categories,
                    and stock inventory efficiently using this system.
                    Monitor low stock items, organize products properly,
                    and maintain smooth daily operations.
                </p>

            </div>

            <div class="quick-box">

                <h2>
                    Quick Actions
                </h2>

                <div class="quick-links">

                    <a href="/products/create">
                        + Add Product
                    </a>

                    <a href="/categories/create">
                        + Add Category
                    </a>

                    <a href="/suppliers/create">
                        + Add Supplier
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>