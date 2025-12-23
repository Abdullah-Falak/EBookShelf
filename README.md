# Ebook Shelf 📚

**Ebook Shelf** is a comprehensive web-based digital library designed to make browsing, previewing, and downloading books effortless. This project combines a modern, responsive frontend with a secure backend to manage user access.

It features a curated collection of books across various categories including Islamic studies, Technology, History, Science Fiction, and more.

## 🚀 Key Features

* **User Authentication:** Secure **Sign Up** and **Login** system using PHP & MySQL (passwords are hashed for security).
* **Dynamic Book Catalog:** Browse books by category (e.g., *Islamic, Tech, History*) with instant filtering using JavaScript.
* **Direct Access:** Buttons to **Preview** books (via Archive.org reader) or **Download** them directly.
* **Responsive Design:** A clean, mobile-friendly interface built with custom CSS.
* **Database Integration:** User data is securely stored and managed via a local MySQL database.

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Local Server:** XAMPP (Apache)

---

## ⚠️ Important Note (Read Before Running)

**This project uses PHP and MySQL.** It cannot be run simply by opening the HTML files in a browser or by hosting it on static sites like GitHub Pages.

To run this project, you must use a **local server environment** like **XAMPP**, WAMP, or MAMP.

---

## ⚙️ Installation & Setup Guide

Follow these steps to run the project on your local machine:

### 1. Install XAMPP
Download and install [XAMPP](https://www.apachefriends.org/index.html).

### 2. Clone the Repository
Move the project folder into your XAMPP server directory:
* **Path:** `C:\xampp\htdocs\ebook_shelf`

### 3. Start the Server
Open the **XAMPP Control Panel** and start **Apache** and **MySQL**.

### 4. Setup the Database
1.  Open **MySQL Workbench** or **phpMyAdmin** (`http://localhost/phpmyadmin`).
2.  Create a new database named: `ebook_shelf`
3.  Run the following SQL command to create the necessary table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
