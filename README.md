Welcome to the Home Fix Website repository! This project aims to provide a platform where users can find and book services such as TV repair, plumbing, electrical work, and more. The website is currently built using PHP and MySQL on the XAMPP server. The photo search technology feature, which was planned to be implemented using Spring Boot and YOLO (You Only Look Once), is not yet introduced due to limited knowledge in these areas.

Table of Contents
Features
Technologies Used
Installation
Usage
Project Structure
Contributing
Features
User registration and login
Vendor/service provider registration
Service management for vendors
Booking services by users
Admin panel for managing vendors and bookings
Search and filter services by category and location
User reviews and ratings for services
Technologies Used
Backend: PHP
Database: MySQL
Server: XAMPP
Frontend: HTML, CSS, JavaScript
Authentication: PHP sessions
Installation
Prerequisites
XAMPP server installed on your machine
Web browser (Chrome, Firefox, etc.)
Steps
Clone the repository to your local machine:

bash
Copy code
git clone https://github.com/harshitshukla9752/Homefix.git
Start the XAMPP control panel and ensure that Apache and MySQL services are running.

Copy the cloned repository to the htdocs directory of your XAMPP installation:

bash
Copy code
cp -r home-fix-website /path/to/xampp/htdocs/
Import the database:

Open phpMyAdmin by navigating to http://localhost/phpmyadmin/ in your browser.
Create a new database named home_fix.
Import the home_fix.sql file located in the database directory of the project.
Update the database configuration:

Open config.php file in the project root directory.
Update the database credentials as per your local setup:
php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home_fix";
?>
Open the website in your browser by navigating to http://localhost/home-fix-website/.

Usage
Register: Create a new user or vendor account.
Login: Access the platform with your registered credentials.
Browse Services: Search and filter available services.
Book Service: Select a service and book it for a specific date and time.
Manage Services: Vendors can add, update, or delete their services.
Admin Panel: Admins can approve or reject vendor registrations and manage bookings.
Project Structure
arduino

Contributing
Contributions are welcome! Please open an issue or submit a pull request for any enhancements, bug fixes, or new features.
