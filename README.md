# KMMIMS

**KAK Mini Mart Inventory Management System (KMMIMS)**

The KAK Mini Mart Inventory Management System is designed to help manage inventory records, products, suppliers, and categories in a more organized way. Instead of writing records manually, users can use the system to store and manage information digitally.

**Developers:**
- Kevin Vila
- Kaela Ashley Nicole Zabat
- Aaron Daniel Legayo

**Modules**
- Login & Authentication
- Dashboard
- Product Management
- Category Management
- Supplier Management
- Inventory Management
- Stock Monitoring
- Analytics
- Activity Logs
- Reports
- Import Functionality

**System Overview**
The system begins with the Login page. Users must enter their email and password before they can access the system. Laravel verifies the login credentials and creates a session for the user. If the credentials are correct, the user is redirected to the Dashboard. If not, the system displays an error message.

After logging in, the user can access different modules of the system through the navigation menu.

**Dashboard**
The Dashboard serves as the main page of the system. It gives users a quick overview of the inventory status.

It displays information such as:
- Total number of products
- Total number of categories
- Total number of suppliers
- Inventory statistics
- Recent system activities

**Product Management**
Users can:
- Add new products
- View product information
- Edit existing products
- Delete products
- Monitor stock quantities

When a user creates a product, the system collects information such as the product name, category, supplier, price, and stock quantity. The ProductController processes the request and sends the data to the Product Model. The model then saves the information into the database.

**Category Management**
Categories help organize products into different groups.

Examples:

- Beverages
- Snacks
- Canned Goods

Users can create, edit, view, and delete categories.

The CategoryController handles all category-related requests while the Category Model communicates with the database.

Supplier Management

Allows users to:

Add suppliers
View supplier information
Update supplier records
Delete suppliers

Supplier records may include supplier names, contact information, and addresses.

Inventory Management

Allows users to:

Monitor stock levels
Track inventory changes
Update stock quantities
Manage inventory records
Stock Movement Tracking

Records inventory activities such as:

Adding stock
Updating stock quantities
Removing stock
Inventory adjustments
Analytics

Provides inventory insights including:

Inventory statistics
Stock monitoring
Inventory trends
Restocking recommendations
Activity Logs

Records system activities such as:

User Login
Product Creation
Product Updates
Product Deletion
Category Management
Supplier Management
Reports

Allows users to generate inventory-related reports including:

Product Lists
Inventory Summaries
Stock Information
Supplier Records
Import Functionality

Allows bulk importing of:

Products
Categories
Suppliers

This reduces manual data entry and improves efficiency.

Database Tables

The system uses a database to store inventory information.

Important tables include:

users
products
categories
suppliers
inventories
stock_movements
activity_logs
System Architecture

The system follows Laravel's MVC (Model-View-Controller) architecture.

Models
Handle database operations
Represent database tables
Manage relationships between data
Views
Display information to users
Show forms, tables, and reports
Provide the user interface
Controllers
Receive user requests
Process data
Communicate with models
Return views to users

The system uses Laravel Eloquent ORM to efficiently perform Create, Read, Update, and Delete (CRUD) operations.

System Flow
User logs into the system.
Dashboard displays inventory information.
User manages products, categories, and suppliers.
Controllers process user requests.
Models communicate with the database.
Inventory records are updated.
Stock movements are recorded.
Activity logs track user actions.
Reports and analytics provide useful information.
Installation
GitHub Clone

Clone the repository:

git clone https://github.com/yourusername/inventory_management.git

Navigate to the project directory:

cd inventory_management

Install dependencies:

composer install

Copy the environment file:

cp .env.example .env

Generate the application key:

php artisan key:generate

Configure your database connection inside the .env file.

Run migrations:

php artisan migrate

Install frontend dependencies:

npm install
npm run build

Start the development server:

php artisan serve
Requirements
PHP 8.4+
Composer
Node.js
NPM
SQLite (Default)
MySQL 8.0+
Laravel 13
Demo Credentials
Email	Password
admin@example.com	password
Technologies Used
Laravel 13
Laravel Sanctum
Laravel Breeze
Laravel DomPDF
Maatwebsite Excel
League CSV
Milon Barcode
MySQL
Blade Templating Engine
Eloquent ORM
Hosting Link

https://inventorymanagement-production-393a.up.railway.app

License

This project was developed for educational purposes only.

