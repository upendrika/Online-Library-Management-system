# Online Library Management System
## Project Overview

The Online Library Management System is a web-based application designed to manage and automate the daily operations of a library. This system allows both students and administrators to interact with the library's resources efficiently. The platform supports secure access for users, allowing them to search for books, place orders, and manage their accounts, while administrators can oversee book inventories, monitor user activity, and send notifications.

## Features
### User Side (Student/Teacher)
* User Authentication: Secure login and registration for all users.
* Profile Management: Users can view and update their personal information.
* Book Search and Reservation: Search for books by name or category, and place orders for books.
* Order Management: Track order status, including issue and return dates.
* Time Tracking: Automatic countdown timer for book return deadlines.
* Extension Requests: Option to request additional time for borrowed books.
* Public Comment Section: Users can provide feedback, ask questions, and engage with the community.

### Admin Side
* User Management: View and manage all registered users and monitor online activity.
* Book Management: Add, update, or delete books from the inventory.
* Order Approval: Approve or reject book order requests from users.
* Notifications: Send alerts and reminders to users about return deadlines.
* User Communication: Reply to user messages and comments directly through the system.

## Technology Stack

* Frontend: HTML, CSS, Bootstrap, JavaScript
* Backend: PHP
* Database: MYSQLI

## Installation Instructions

#### 1. Clone the repository:

```
git clone https://github.com/upendrika/Online-Library-Management-system.git
```

#### 2. Set up the environment:
* Ensure you have a local server environment (e.g., XAMPP, WAMP) with PHP and MYSQLI support.
* Place the project files in the server’s root directory (e.g., htdocs for XAMPP).

#### 3. Import the Database:

* Create a database in MYSQLI (e.g., library_db).
* you'll need to manually create the necessary tables and columns in your database..

#### 4. Configure the Database Connection:

* Open the ```config.php``` file in the project and update the database credentials:
```
$host = 'localhost';
$db   = 'library_db';
$user = 'your_username';
$pass = 'your_password';
```

#### 5. Run the Project:

* Start your local server and navigate to http://localhost/your_project_folder in your browser.

## Usage

* Admin Access: Use the admin credentials to log in and manage the library.
* User Registration: Users can register on the platform and start exploring the library's resources.

## Future Enhancements
* Integrating advanced search filters.
* Implementing a recommendation system for users based on their reading history.
* Developing a mobile-responsive version of the application.


## Contact
For any inquiries or support, feel free to contact me via LinkedIn: www.linkedin.com/in/ishara-de-silva-2b62592ba


