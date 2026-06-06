<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inventory Analytics</title>

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
    display:flex;
    flex-direction:column;
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
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    margin-bottom:25px;
}

.header h1{
    font-size:30px;
    font-weight:700;
    color:#0f172a;
}

.subtitle{
    color:#64748b;
    margin-top:6px;
    font-size:14px;
}

/* CARDS GRID */
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
    gap:20px;
}

/* CARD */
.card{
    border-radius:20px;
    padding:24px;
    color:white;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    transition:.3s;
    position:relative;
    overflow:hidden;
}

.card:hover{
    transform:translateY(-6px);
}

/* glow */
.card::after{
    content:'';
    position:absolute;
    top:-60%;
    right:-60%;
    width:220px;
    height:220px;
    background:rgba(255,255,255,0.12);
    transform:rotate(25deg);
}

/* TEXT */
.card-title{
    font-size:13px;
    opacity:.9;
}

.card-value{
    font-size:40px;
    font-weight:800;
    margin-top:10px;
}

/* COLORS */
.blue{ background:linear-gradient(135deg,#2563eb,#1d4ed8); }
.green{ background:linear-gradient(135deg,#16a34a,#15803d); }
.orange{ background:linear-gradient(135deg,#f59e0b,#d97706); }
.red{ background:linear-gradient(135deg,#dc2626,#b91c1c); }
.purple{ background:linear-gradient(135deg,#7c3aed,#6d28d9); }
.dark{ background:linear-gradient(135deg,#334155,#1e293b); }



/* VALUE BOX */
.value-box{
    margin-top:30px;
    background:white;
    padding:28px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:15px;
}

.value-title{
    color:#64748b;
    font-size:14px;
}

.value-number{
    font-size:46px;
    font-weight:800;
    color:#16a34a;
}
/* SECTIONS */

.section{
    margin-top:30px;
}

.section-title{
    font-size:20px;
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
    padding:24px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.summary-card h3{
    font-size:34px;
    color:#2563eb;
    margin-bottom:5px;
}

.summary-card p{
    color:#64748b;
}

/* ANALYTICS */

.analytics-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:20px;
    margin-top:30px;
}

.panel{
    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.panel-title{
    font-size:18px;
    font-weight:700;
    margin-bottom:20px;
    color:#0f172a;
}

.health-item{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    border-bottom:1px solid #e2e8f0;
}

.health-item:last-child{
    border-bottom:none;
}

.insights{
    list-style:none;
}

.insights li{
    padding:12px 0;
    border-bottom:1px solid #e2e8f0;
    color:#475569;
}

.insights li:last-child{
    border-bottom:none;
}

/* ACTIVITY */

.activity-box{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
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

/* PERFORMANCE */

.performance-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.performance-card{
    background:white;
    padding:24px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.performance-card h4{
    margin-bottom:10px;
    color:#0f172a;
}

.performance-card p{
    color:#2563eb;
    font-weight:600;
}
/* REPORTS */

.reports-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.report-btn{
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    color:white;
    padding:18px;
    border-radius:18px;
    font-weight:600;
    transition:.3s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.report-btn:hover{
    transform:translateY(-5px);
}

.report-json{
    background:linear-gradient(135deg,#334155,#1e293b);
}

.report-csv{
    background:linear-gradient(135deg,#16a34a,#15803d);
}

.report-xlsx{
    background:linear-gradient(135deg,#059669,#047857);
}

.report-pdf{
    background:linear-gradient(135deg,#dc2626,#b91c1c);
}

.export-box{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    display:flex;
    gap:20px;
    align-items:end;
    flex-wrap:wrap;
}

.field{
    flex:1;
    min-width:220px;
}

.field label{
    display:block;
    margin-bottom:8px;
    color:#64748b;
    font-size:14px;
    font-weight:600;
}

.field select{
    width:100%;
    padding:14px;
    border:1px solid #dbe2ea;
    border-radius:12px;
    font-size:15px;
    background:white;
}

.export-btn{
    background:#2563eb;
    color:white;
    border:none;
    padding:14px 24px;
    border-radius:12px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.export-btn:hover{
    background:#1d4ed8;
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

    .header h1{
        font-size:26px;
    }
}


</style>

function importData()
{
    let type =
        document.getElementById("importType").value;

    let format =
        document.getElementById("importFormat").value;

    let file =
        document.getElementById("importFile").files[0];

    if(!file)
    {
        alert("Please select a file.");
        return;
    }

    let formData = new FormData();

    formData.append("file", file);

    let url = "";

    if(format == "excel" || format == "csv")
    {
        url = "/imports/" + type;
    }
    else if(format == "json")
    {
        url = "/imports/" + type + "/json";
    }

    fetch(url, {

        method: "POST",

        body: formData,

        headers: {

            "X-CSRF-TOKEN":
            document.querySelector(
                'meta[name="csrf-token"]'
            ).content

        }

    })

    .then(response => response.text())

    .then(data => {

        alert("Import completed successfully.");

        location.reload();

    })

    .catch(error => {

        alert("Import failed.");

    });

}

</head>

<meta name="csrf-token" content="{{ csrf_token() }}">

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">KAK<BR>Mini Mart</div>

    <div class="menu">
        <a href="/dashboard">Dashboard</a>
        <a href="/products">Products</a>
        <a href="/categories">Categories</a>
        <a href="/suppliers">Suppliers</a>
        <a href="/analytics" class="active">Analytics</a>
        <a href="/activity-logs">
    Activity Logs
</a>

        <a href="/profile">
    Settings
</a>
    </div>

</div>

<!-- MAIN -->
<div class="main">

    <div class="header">
        <h1>Inventory Analytics</h1>
        <div class="subtitle">
            Monitor inventory performance and stock health in real time
        </div>
    </div>

    <div class="cards">

        <div class="card blue">
            <div class="card-title">Total Products</div>
            <div class="card-value">{{ $totalProducts }}</div>
        </div>

        <div class="card green">
            <div class="card-title">Categories</div>
            <div class="card-value">{{ $totalCategories }}</div>
        </div>

        <div class="card purple">
            <div class="card-title">Suppliers</div>
            <div class="card-value">{{ $totalSuppliers }}</div>
        </div>

        <div class="card orange">
            <div class="card-title">Low Stock Products</div>
            <div class="card-value">{{ $lowStock }}</div>
        </div>

        <div class="card red">
            <div class="card-title">Expired Products</div>
            <div class="card-value">{{ $expiredProducts }}</div>
        </div>

        <div class="card dark">
            <div class="card-title">Inventory Status</div>
            <div class="card-value">Good</div>
        </div>

    </div>


<!-- INVENTORY SUMMARY -->

<div class="section">

    <div class="section-title">
        Inventory Summary
    </div>

    <div class="summary-grid">

        <div class="summary-card">
            <h3>{{ $totalProducts }}</h3>
            <p>Products Registered</p>
        </div>

        <div class="summary-card">
            <h3>{{ $totalCategories }}</h3>
            <p>Categories Available</p>
        </div>

        <div class="summary-card">
            <h3>{{ $totalSuppliers }}</h3>
            <p>Active Suppliers</p>
        </div>

        <div class="summary-card">
            <h3>{{ $lowStock }}</h3>
            <p>Needs Restocking</p>
        </div>

    </div>

</div>

<!-- EXPORT CENTER -->

<div class="section">

    <div class="section-title">
        Export Center
    </div>

    <div class="export-box">

        <div class="field">

            <label>Report Type</label>

            <select id="reportType">

                <option value="products">
                    Products
                </option>

                <option value="categories">
                    Categories
                </option>

                <option value="suppliers">
                    Suppliers
                </option>

                <option value="analytics">
                    Full Analytics
                </option>

            </select>

        </div>

        <div class="field">

            <label>Export Format</label>

            <select id="reportFormat">

    <option value="json">
        JSON
    </option>

    <option value="csv">
        CSV
    </option>

    <option value="xlsx">
        Excel
    </option>

    <option value="pdf">
        PDF
    </option>

</select>

        </div>

        <button onclick="downloadReport()"
                class="export-btn">

            Generate Report

        </button>

    </div>

</div>

<!-- IMPORT CENTER -->

<div class="section">

    <h2>Import Data</h2>

<div class="card">

    <label>Import Type</label>

    <select id="importType">
        <option value="products">Products</option>
        <option value="categories">Categories</option>
        <option value="suppliers">Suppliers</option>
    </select>

    <br><br>

    <label>Import Format</label>

    <select id="importFormat">
        <option value="excel">Excel (.xlsx)</option>
        <option value="csv">CSV</option>
        <option value="json">JSON</option>
    </select>

    <br><br>

    <label>Select File</label>

    <input
        type="file"
        id="importFile"
    >

    <br><br>

    <button
        onclick="importData()"
        class="btn-primary">

        Import Data

    </button>

</div>

        <div class="field">

            <label>Select Excel File</label>

            <input
                type="file"
                id="importFile"
                accept=".xlsx,.xls"
                style="
                    width:100%;
                    padding:14px;
                    border:1px solid #dbe2ea;
                    border-radius:12px;
                    background:white;
                "
            >

        </div>

        <button
            onclick="importData()"
            class="export-btn">

            Import Data

        </button>

    </div>

</div>

<!-- ANALYTICS GRID -->

<div class="analytics-grid">

    <div class="panel">

        <div class="panel-title">
            Stock Health
        </div>

        <div class="health-item">
            <span>Healthy Stock</span>
            <strong>{{ $totalProducts - $lowStock }}</strong>
        </div>

        <div class="health-item">
            <span>Low Stock</span>
            <strong>{{ $lowStock }}</strong>
        </div>

        <div class="health-item">
            <span>Expired Products</span>
            <strong>{{ $expiredProducts }}</strong>
        </div>

    </div>

    <div class="panel">

        <div class="panel-title">
            Quick Insights
        </div>

        <ul class="insights">

            <li>
                Total inventory value is
                ₱{{ number_format($inventoryValue,2) }}
            </li>

            <li>
                {{ $lowStock }}
                products require replenishment
            </li>

            <li>
                {{ $expiredProducts }}
                expired products detected
            </li>

            <li>
                {{ $totalSuppliers }}
                suppliers currently active
            </li>

        </ul>

    </div>

</div>

<!-- RECENT ACTIVITY -->

<div class="section">

    <div class="section-title">
        Recent Inventory Activity
    </div>

    <div class="activity-box">

        <div class="activity-item">
            Product inventory updated
            <span>Today</span>
        </div>

        <div class="activity-item">
            New supplier added
            <span>Yesterday</span>
        </div>

        <div class="activity-item">
            Stock replenishment completed
            <span>2 days ago</span>
        </div>

        <div class="activity-item">
            Monthly inventory review generated
            <span>This week</span>
        </div>

    </div>

</div>

<!-- CATEGORY PERFORMANCE -->

<div class="section">

    <div class="section-title">
        Category Performance
    </div>

    <div class="performance-grid">

        <div class="performance-card">
            <h4>Top Category</h4>
            <p>Food & Beverages</p>
        </div>

        <div class="performance-card">
            <h4>Fast Moving</h4>
            <p>Snacks</p>
        </div>

        <div class="performance-card">
            <h4>Slow Moving</h4>
            <p>Household Supplies</p>
        </div>

        <div class="performance-card">
            <h4>Best Supplier</h4>
            <p>Main Distributor</p>
        </div>

    </div>

</div>


    <div class="value-box">

        <div class="value-title">Total Inventory Value</div>

        <div class="value-number">
            ₱{{ number_format($inventoryValue,2) }}
        </div>

    </div>

</div>

</body>
</html>