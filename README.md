# IT Support & Maintenance System

A web application for an IT service provider, built with **PHP, MySQL and Bootstrap**.

## Features

**Requesters (customers)**
- Register, log in and manage their profile
- Submit service requests and check their status

**Admin**
- Dashboard with requests, requesters and technicians
- Assign work to technicians and view assigned work
- Manage assets/products, sell products and view sales reports
- Work reports, employee management, password change

## Structure

| Path | Contents |
|---|---|
| `index.php`, `UserRegistration.php`, `ContactForm.php` | Public site, sign-up, contact |
| `requester/` | Requester login, profile, submit request, check status |
| `Admin/` | Admin dashboard and management pages |
| `dbConnection.php` | Database connection settings |

## Run locally

1. Install **XAMPP** (Apache + MySQL) and copy this folder into `htdocs/`.
2. Create a MySQL database named `newisms` and its tables. The SQL schema isn't included in this repo.
3. Check the settings in `dbConnection.php` (defaults: `localhost`, user `root`, empty password).
4. Open `http://localhost/IT-SUPPORT-AND-MAINTENANCE-SYSTEM/`.
