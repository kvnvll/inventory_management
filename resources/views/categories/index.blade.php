<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Categories | Mini Mart</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* RESET */
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
    padding:14px 16px;
    border-radius:12px;
    transition:.3s;
    font-size:14px;
}

.menu a:hover{
    background:rgba(255,255,255,0.08);
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

/* HEADER */
.header{
    background:white;
    padding:20px 25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:15px;
    margin-bottom:25px;
}

.title{
    font-size:28px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    color:#64748b;
    font-size:14px;
    margin-top:4px;
}

/* SUCCESS */
.success{
    background:#dcfce7;
    color:#166534;
    padding:14px;
    border-radius:12px;
    margin-bottom:20px;
}

/* BUTTONS */
.btn{
    border:none;
    cursor:pointer;
    text-decoration:none;
    color:white;
    padding:10px 16px;
    border-radius:10px;
    font-weight:500;
    font-size:14px;
    transition:.3s;
    display:inline-block;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-add{ background:#16a34a; }
.btn-edit{ background:#2563eb; }
.btn-delete{ background:#dc2626; }

/* STATS */
.stats{
    background:#eff6ff;
    color:#2563eb;
    padding:10px 14px;
    border-radius:12px;
    font-weight:600;
    font-size:14px;
}

/* TABLE */
.table-card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.table-header{
    padding:18px 22px;
    border-bottom:1px solid #e2e8f0;
    font-weight:600;
    color:#0f172a;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    text-align:left;
    padding:16px;
    background:#f8fafc;
    color:#64748b;
    font-size:13px;
    text-transform:uppercase;
}

td{
    padding:16px;
    border-top:1px solid #f1f5f9;
    color:#334155;
}

tbody tr:hover{
    background:#f8fafc;
}

/* CATEGORY BADGE */
.category-badge{
    background:#dbeafe;
    color:#1d4ed8;
    padding:6px 12px;
    border-radius:30px;
    font-size:13px;
    font-weight:500;
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

/* OVERVIEW */

.overview-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.overview-card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.overview-card h3{
    color:#2563eb;
    font-size:32px;
    margin-bottom:8px;
}

.overview-card p{
    color:#64748b;
}

/* INSIGHTS */

.insight-box{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.insight-item{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    border-bottom:1px solid #e2e8f0;
}

.insight-item:last-child{
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

/* GUIDELINES */

.guidelines-box{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.guidelines-box ul{
    padding-left:20px;
}

.guidelines-box li{
    margin-bottom:12px;
    color:#475569;
}

/* SUMMARY */

.summary-box{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    color:#475569;
    line-height:1.8;
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

    .header{
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

    <div class="logo">KAK<BR> Mini Mart</div>

    <div class="menu">
        <a href="/dashboard">Dashboard</a>
        <a href="/products">Products</a>
        <a href="/categories" class="active">Categories</a>
        <a href="/suppliers">Suppliers</a>
        <a href="/analytics">Analytics</a>
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

<!-- HEADER -->
<div class="header">

    <div>
        <div class="title">Categories</div>
        <div class="subtitle">Manage product categories</div>
    </div>

    <div style="display:flex;gap:12px;align-items:center;">
        <div class="stats">
            Total: {{ count($categories) }}
        </div>

        <a href="/categories/create" class="btn btn-add">
            + Add Category
        </a>
    </div>

</div>


<!-- TABLE -->
<div class="table-card">

    <div class="table-header">
        Category List
    </div>
    

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        @forelse($categories as $category)

            <tr>

                <td>#{{ $category->id }}</td>

                <td>
                    <span class="category-badge">
                        {{ $category->name }}
                    </span>
                </td>

                <td>
                    <div class="actions">

                        <a href="/categories/{{ $category->id }}/edit"
                           class="btn btn-edit">
                            Edit
                        </a>

                        <form method="POST" action="/categories/{{ $category->id }}">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-delete"
                                    onclick="return confirm('Delete this category?')">
                                Delete
                            </button>
                        </form>

                    </div>
                </td>

            </tr>

        @empty

            <tr>
                <td colspan="3" class="empty">
                    No categories found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>
<!-- CATEGORY OVERVIEW -->

<div class="section">

    <div class="section-title">
        Category Overview
    </div>

    <div class="overview-grid">

        <div class="overview-card">
            <h3>{{ count($categories) }}</h3>
            <p>Total Categories</p>
        </div>

        <div class="overview-card">
            <h3>Active</h3>
            <p>Category Status</p>
        </div>

        <div class="overview-card">
            <h3>100%</h3>
            <p>Organization Rate</p>
        </div>

        <div class="overview-card">
            <h3>Updated</h3>
            <p>Inventory Structure</p>
        </div>

    </div>

</div>

<!-- CATEGORY INSIGHTS -->

<div class="section">

    <div class="section-title">
        Category Insights
    </div>

    <div class="insight-box">

        <div class="insight-item">
            <span>Total Registered Categories</span>
            <strong>{{ count($categories) }}</strong>
        </div>

        <div class="insight-item">
            <span>Product Organization Status</span>
            <strong>Healthy</strong>
        </div>

        <div class="insight-item">
            <span>Inventory Classification</span>
            <strong>Active</strong>
        </div>

        <div class="insight-item">
            <span>Category Management</span>
            <strong>Operational</strong>
        </div>

    </div>

</div>

<!-- RECENT CATEGORY ACTIVITY -->

<div class="section">

    <div class="section-title">
        Recent Activity
    </div>

    <div class="activity-box">

        <div class="activity-item">
            New category added
            <span>Today</span>
        </div>

        <div class="activity-item">
            Category information updated
            <span>Yesterday</span>
        </div>

        <div class="activity-item">
            Product classification reviewed
            <span>2 days ago</span>
        </div>

        <div class="activity-item">
            Inventory categories synchronized
            <span>This week</span>
        </div>

    </div>

</div>

<!-- CATEGORY GUIDELINES -->

<div class="section">

    <div class="section-title">
        Category Guidelines
    </div>

    <div class="guidelines-box">

        <ul>

            <li>
                Create categories to keep products organized.
            </li>

            <li>
                Use clear and descriptive category names.
            </li>

            <li>
                Avoid duplicate categories.
            </li>

            <li>
                Review category structure regularly.
            </li>

            <li>
                Ensure products are assigned correctly.
            </li>

        </ul>

    </div>

</div>

<!-- CATEGORY OVERVIEW -->

<div class="section">

    <div class="section-title">
        Category Overview
    </div>

    <div class="overview-grid">

        <div class="overview-card">
            <h3>{{ count($categories) }}</h3>
            <p>Total Categories</p>
        </div>

        <div class="overview-card">
            <h3>Active</h3>
            <p>Category Status</p>
        </div>

        <div class="overview-card">
            <h3>100%</h3>
            <p>Organization Rate</p>
        </div>

        <div class="overview-card">
            <h3>Updated</h3>
            <p>Inventory Structure</p>
        </div>

    </div>

</div>

<!-- CATEGORY INSIGHTS -->

<div class="section">

    <div class="section-title">
        Category Insights
    </div>

    <div class="insight-box">

        <div class="insight-item">
            <span>Total Registered Categories</span>
            <strong>{{ count($categories) }}</strong>
        </div>

        <div class="insight-item">
            <span>Product Organization Status</span>
            <strong>Healthy</strong>
        </div>

        <div class="insight-item">
            <span>Inventory Classification</span>
            <strong>Active</strong>
        </div>

        <div class="insight-item">
            <span>Category Management</span>
            <strong>Operational</strong>
        </div>

    </div>

</div>

<!-- RECENT CATEGORY ACTIVITY -->

<div class="section">

    <div class="section-title">
        Recent Activity
    </div>

    <div class="activity-box">

        <div class="activity-item">
            New category added
            <span>Today</span>
        </div>

        <div class="activity-item">
            Category information updated
            <span>Yesterday</span>
        </div>

        <div class="activity-item">
            Product classification reviewed
            <span>2 days ago</span>
        </div>

        <div class="activity-item">
            Inventory categories synchronized
            <span>This week</span>
        </div>

    </div>

</div>

<!-- CATEGORY GUIDELINES -->

<div class="section">

    <div class="section-title">
        Category Guidelines
    </div>

    <div class="guidelines-box">

        <ul>

            <li>
                Create categories to keep products organized.
            </li>

            <li>
                Use clear and descriptive category names.
            </li>

            <li>
                Avoid duplicate categories.
            </li>

            <li>
                Review category structure regularly.
            </li>

            <li>
                Ensure products are assigned correctly.
            </li>

        </ul>

    </div>

</div>

<!-- MANAGEMENT SUMMARY -->

<div class="section">

    <div class="section-title">
        Management Summary
    </div>

    <div class="summary-box">

        Categories play a key role in organizing inventory records,
        improving product searches, simplifying reporting, and helping
        staff manage stock efficiently. Maintaining a clear category
        structure improves overall inventory accuracy and workflow.

    </div>

</div>


</div>

</body>
</html>