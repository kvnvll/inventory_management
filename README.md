# KAK Mini Mart Inventory Management System (KMMIMS)

The KAK Mini Mart Inventory Management System (KMMIMS) is designed to help manage inventory records, products, suppliers, and categories in a more organized way. Instead of writing records manually, users can use the system to store and manage information digitally.

## Developers

* Kevin Vila
* Kaela Ashley Nicole Zabat
* Aaron Daniel Legayo

## Project Description

The system begins with the Login page. Users must enter their email and password before they can access the system. Laravel verifies the login credentials and creates a session for the user. If the credentials are correct, the user is redirected to the Dashboard. If not, the system displays an error message.

After logging in, the user can access different modules of the system through the navigation menu.

The Dashboard serves as the main page of the system. It gives users a quick overview of the inventory status. It displays information such as:

* Total Products
* Total Categories
* Total Suppliers
* Inventory Statistics
* Recent System Activities

This allows users to quickly monitor important information without opening multiple pages.

## Modules

* Login
* Dashboard
* Product Management
* Category Management
* Supplier Management
* Inventory Management
* Stock Movement Tracking
* Analytics
* Activity Logs
* Reports
* Import Functionality

## Product Management

The Product Management module allows users to manage all products stored in the inventory.

Users can:

* Add New Products
* View Product Information
* Edit Existing Products
* Delete Products
* Monitor Stock Quantities

When a user creates a product, the system collects information such as the product name, category, supplier, price, and stock quantity. The ProductController processes the request and sends the data to the Product Model. The model then saves the information into the database.

When products are updated or deleted, the system automatically reflects the changes in the product list.

## Category Management

Categories help organize products into different groups.

Examples:

* Beverages
* Snacks
* Canned Goods
* Household Items

Users can create, edit, view, and delete categories. When a product is created, it can be assigned to a category. This makes products easier to find and manage.

The CategoryController handles all category-related requests while the Category Model communicates with the database.

## Supplier Management

The Supplier module stores information about suppliers who provide products to the mini mart.

Users can:

* Add Suppliers
* View Supplier Information
* Update Supplier Records
* Delete Suppliers

Supplier information may include:

* Supplier Name
* Contact Details
* Address

Having supplier records stored in the system makes it easier to track where products come from and who to contact when restocking inventory.

## Inventory Management

The Inventory module is one of the main parts of the system.

It helps users:

* Monitor Stock Levels
* Track Inventory Changes
* Update Stock Quantities
* Manage Inventory Records

Whenever products are added, updated, or restocked, the inventory records are also updated. This helps ensure that stock information remains accurate.

The system can help prevent inventory problems by allowing users to see current stock quantities at any time.

## Stock Movement Tracking

The system records stock movements whenever inventory changes occur.

Examples include:

* Adding New Stock
* Updating Stock Quantities
* Removing Stock
* Inventory Adjustments

These records help users keep track of how inventory changes over time.

By maintaining stock movement records, the business can better understand inventory usage and monitor product availability.

## Analytics

The Analytics section provides useful information about inventory data.

This module helps users:

* View Inventory Statistics
* Monitor Stock Levels
* Analyze Inventory Trends
* Identify Products That May Need Restocking

The analytics data is displayed in a simple format to help users make better decisions regarding inventory management.

## Activity Logs

The Activity Log module records actions performed by users within the system.

Examples of recorded activities include:

* User Login
* Product Creation
* Product Updates
* Product Deletion
* Category Management
* Supplier Management

The system stores these actions in the `activity_logs` table.

This feature helps maintain accountability and allows administrators to review system activities whenever necessary.

## Reports

The Reports module allows users to generate and view inventory-related reports.

Reports may include:

* Product Lists
* Inventory Summaries
* Stock Information
* Supplier-Related Records

These reports can help users review inventory status and support business decision-making.

## Import Functionality

To make data entry faster, the system includes import functionality.

Users can import:

* Products
* Categories
* Suppliers

This reduces the time required to manually enter large amounts of information into the system.

## Database Tables

Important tables include:

* users
* products
* categories
* suppliers
* inventories
* stock_movements
* activity_logs

## System Architecture

The system follows Laravel's MVC (Model-View-Controller) architecture.

### Models

* Handle database operations
* Represent database tables
* Manage relationships between data

### Views

* Display information to users
* Show forms, tables, and reports
* Provide the user interface

### Controllers

* Receive user requests
* Process data
* Communicate with models
* Return views to users

Laravel communicates with the database using Eloquent ORM. This allows the system to create, read, update, and delete records efficiently.

## System Flow

1. User logs into the system.
2. Dashboard displays inventory information.
3. User manages products, categories, and suppliers.
4. Data is processed by controllers.
5. Models communicate with the database.
6. Inventory records are updated.
7. Stock movements are recorded.
8. Activity logs track user actions.
9. Reports and analytics provide useful information.
10. Users can monitor inventory and manage business operations more efficiently.

## Installation

### GitHub Fork / Clone

Clone the repository:

```bash
git clone https://github.com/yourusername/inventory_management.git
```

Install dependencies:

```bash
composer install
```

Copy the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Run migrations:

```bash
php artisan migrate
```

Install frontend dependencies:

```bash
npm install
npm run build
```

Start the local server:

```bash
php artisan serve
```

## Requirements

* PHP 8.4+
* Composer
* Node.js
* NPM
* SQLite (Default)
* MySQL 8.0+
* Laravel 13

## Demo Credentials

| Email | Password |
|---------|---------|
| admin@example.com | password |

## What's Included?

* Laravel 13 [MIT] - The PHP framework for web artisans.
* Laravel Sanctum [MIT] - Lightweight API token authentication for Laravel.
* Laravel Breeze [MIT] - Minimal authentication scaffolding for Laravel.
* Laravel DomPDF [MIT] - A PDF generation wrapper for Laravel.
* Maatwebsite Excel [MIT] - Excel and CSV import/export package for Laravel.
* League CSV [MIT] - CSV data manipulation library for PHP.
* Milon Barcode [MIT] - Barcode generation library for Laravel.

## Hosting Link

https://inventorymanagement-production-393a.up.railway.app
