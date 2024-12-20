Simple Create, Read, Update, Delete (CRUD) in PHP & MySQL
========


## Overview

This project is a simple Student Management System built with PHP and MySQL. It allows users to add, edit, delete, and view students' information, including name, telephone, gender, and email.


## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)

- [Author](#author)


## Features

- Add new student data
- Edit existing student data
- Delete student data
- View all students in a tabular format

## Technologies Used

- PHP
- MySQL
- HTML
- Inline CSS

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Goldsmith-Goula/PHPCRUD.git

cd PHPCRUD

2. **Setup the Database**:
```bash
CREATE DATABASE campustwo;
USE campustwo;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `tel` varchar(15),
  `gender` varchar(8),
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);   
```
SQL script to create database and tables is present in **database.sql** file.

3. **Configure Database Connections**:

```sh
<?php
$mysqli = new mysqli("localhost", "username", "password", "test");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
```

4. **Run the Application**:
Ensure you have a local server (like XAMPP, WAMP, or MAMP) running.
Place the project in the server's root directory (e.g., htdocs for XAMPP).
Access the application via your web browser at http://localhost/PHPCRUD.


## Usage
- Homepage: Displays a list of all users with options to edit or delete each entry.

- Add New Data: Click on "Add New Data" to open a form for adding a new user.

- Edit Data: Click "Edit" next to a user to modify their information.

- Delete Data: Click "Delete" next to a user to remove them from the database.

## Author

👤 **Goldsmith Goula**

- GitHub: [Goldsmith Goula](https://github.com/Goldsmith-Goula)
- LinkedIn: [Goldsmith Goula](https://www.linkedin.com/in/tchouala-goula-ii-goldsmith-245313246?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app)