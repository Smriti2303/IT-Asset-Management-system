# IT Asset Management System

## Overview
This **IT Asset Management System** is designed to help businesses streamline their asset management process. The system tracks the lifecycle of IT assets, from procurement to allocation and maintenance. With features like **asset categorization**, **user role management**, and **complaint tracking**, this project aims to simplify asset management and improve operational efficiency.

## Features
- **Asset Tracking**: Keep a detailed record of IT assets including purchase details, allocation status, and maintenance schedules.
- **Role-Based Access**: User roles with different levels of access ensure data security and controlled operations.
- **Complaints Section**: Employees can log asset-related complaints for timely resolutions.
- **Employee Management**: Manage and track employees and their assigned assets.
- **Category Management**: Organize assets by categories such as laptops, software, networking hardware, etc.
  
## Technologies Used
- **Frontend**: HTML, CSS, **Bootstrap** for responsive design.
- **Backend**: **PHP** for server-side scripting.
- **Database**: **Oracle 21c Express Edition**, managed via **Oracle SQL Developer**.
- **Server**: **XAMPP** for local server setup.
- **IDE**: **VS Code** for development.

## Installation

### Prerequisites
- **XAMPP** or any other web server with PHP support
- **Oracle 21c Express Edition** installed
- **Oracle SQL Developer** for database management
- **VS Code** for code editing

### Steps to Run the Project Locally
1. Clone this repository:
   ```bash
   git clone https://github.com/yourusername/IT-Asset-Management-System.git
Setup the database:
Import the SQL scripts (database.sql) into Oracle SQL Developer to create the necessary tables.
Configure the server:
Place the project files in the htdocs folder of XAMPP (or equivalent web server directory).
Make sure XAMPP is running with PHP and MySQL/Oracle server.
Access the application:
Open your browser and navigate to http://localhost/IT-Asset-Management-System/.
Features Walkthrough
1. User Authentication
Login page where admins and employees can access the system based on their roles.
2. Asset Management
Admins can add, update, and delete IT assets in the system.
3. Complaint Management
Employees can submit complaints related to their assigned assets, while admins can review and resolve them.
4. Reports and Data Visualization
Admins can view detailed reports and data related to asset allocations, purchases, and complaints.
Contributing
If you'd like to contribute, feel free to fork this repository and submit a pull request. Please make sure your changes align with the project objectives and maintain high coding standards.
