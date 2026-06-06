**KAK Mini Mart Inventory Management System (KMMIMS)**
# The KAK Mini Mart Inventory Management System is designed to help manage inventory records, products, suppliers, and categories in a more organized way. Instead of writing records manually, users can use the system to store and manage information digitally.

Developers:
Kevin Vila,
Kaela Ashley Nicole Zabat, and
Aaron Daniel Legayo

The system begins with the Login page. Users must enter their email and password before they can access the system. Laravel verifies the login credentials and creates a session for the user. If the credentials are correct, the user is redirected to the Dashboard. If not, the system displays an error message.

After logging in, the user can access different modules of the system through the navigation menu.


The Dashboard serves as the main page of the system. It gives users a quick overview of the inventory status. It displays information such as:

* Total number of products
* Total number of categories
* Total number of suppliers
* Inventory statistics
* Recent system activities

This allows users to quickly monitor important information without opening multiple pages.


The Product Management module allows users to manage all products stored in the inventory.

Users can:

* Add new products
* View product information
* Edit existing products
* Delete products
* Monitor stock quantities

When a user creates a product, the system collects information such as the product name, category, supplier, price, and stock quantity. The ProductController processes the request and sends the data to the Product Model. The model then saves the information into the database.

When products are updated or deleted, the system automatically reflects the changes in the product list.


Categories help organize products into different groups.

For example:

* Beverages
* Snacks
* Canned Goods
* Household Items

Users can create, edit, view, and delete categories. When a product is created, it can be assigned to a category. This makes products easier to find and manage.

The CategoryController handles all category-related requests while the Category Model communicates with the database.


The Supplier module stores information about suppliers who provide products to the mini mart.

Users can:

* Add suppliers
* View supplier information
* Update supplier records
* Delete suppliers

Supplier information may include the supplier name, contact details, and address. Having supplier records stored in the system makes it easier to track where products come from and who to contact when restocking inventory.

The Inventory module is one of the main parts of the system.

It helps users:

* Monitor stock levels
* Track inventory changes
* Update stock quantities
* Manage inventory records

Whenever products are added, updated, or restocked, the inventory records are also updated. This helps ensure that stock information remains accurate.

The system can help prevent inventory problems by allowing users to see current stock quantities at any time.

The system records stock movements whenever inventory changes occur.

Examples include:

* Adding new stock
* Updating stock quantities
* Removing stock
* Inventory adjustments

These records help users keep track of how inventory changes over time.

By maintaining stock movement records, the business can better understand inventory usage and monitor product availability.

The Analytics section provides useful information about inventory data.

This module helps users:

* View inventory statistics
* Monitor stock levels
* Analyze inventory trends
* Identify products that may need restocking

The analytics data is displayed in a simple format to help users make better decisions regarding inventory management.


The Activity Log module records actions performed by users within the system.

Examples of recorded activities include:

* User login
* Product creation
* Product updates
* Product deletion
* Category management
* Supplier management

The system stores these actions in the activity_logs table.

This feature helps maintain accountability and allows administrators to review system activities whenever necessary.

The Reports module allows users to generate and view inventory-related reports.

Reports may include:

* Product lists
* Inventory summaries
* Stock information
* Supplier-related records

These reports can help users review inventory status and support business decision-making.

To make data entry faster, the system includes import functionality.

Users can import:

* Products
* Categories
* Suppliers

This reduces the time required to manually enter large amounts of information into the system.


The system uses a database to store all information.

Important tables include:

* users
* products
* categories
* suppliers
* inventories
* stock_movements
* activity_logs

Whenever a user performs an action, Laravel communicates with the database using Eloquent ORM. This allows the system to create, read, update, and delete records efficiently.


The system follows Laravel's MVC (Model-View-Controller) architecture.

Models

* Handle database operations.
* Represent database tables.
* Manage relationships between data.

Views

* Display information to users.
* Show forms, tables, and reports.
* Provide the user interface.

Controllers

* Receive user requests.
* Process data.
* Communicate with models.
* Return views to users.

Using MVC helps keep the project organized and easier to maintain.

Overall System Flow

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

Overall, the KAK Mini Mart Inventory Management System helps simplify inventory management by providing a centralized platform for storing, updating, and monitoring inventory-related information. The system improves organization, reduces manual work, and helps users maintain accurate inventory records.

Hosting link (https://inventorymanagement-production-393a.up.railway.app)
