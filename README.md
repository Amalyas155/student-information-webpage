# 🎓 Student Information Web Application

A simple web application developed using **PHP**, **MySQL**, **HTML**, and **CSS** to manage student information. Users can add new student records, store them in a MySQL database, display all records in a table, and update each student's status using a Toggle button.

---

## 🌐 Live Demo

**Website:**  
http://amalyasser.kesug.com/index.php

---

## 📸 Project Preview



<img width="1102" height="651" alt="Screenshot 2026-07-27 011704" src="https://github.com/user-attachments/assets/8867d5f1-bb43-4d4f-bf91-5f9b322e9895" />


---

## ✨ Features

- Add a new student (Name & Age)
- Store data in a MySQL database
- Display all student records
- Toggle student status (Active / Inactive)
- Simple and responsive user interface
- Clean table layout for easy data management

---

## 🛠️ Technologies Used

- HTML5
- CSS3
- PHP
- MySQL
- phpMyAdmin
- InfinityFree Hosting

---

## 🗂️ Database Structure

**Table Name:** `student`

| Column | Type | Description |
|---------|------|-------------|
| id | INT | Student ID (Primary Key) |
| name | VARCHAR(100) | Student Name |
| age | INT | Student Age |
| status | TINYINT(1) | Student Status |

**Status Values**

- **0 → Inactive**
- **1 → Active**

---

## 📂 Project Structure

```
Student-Information-Webpage/
│
├── index.php
├── toggle.php
├── student.sql
└── README.md
   
```

---

## ⚙️ How It Works

1. Enter the student's name and age.
2. Click the **Submit** button.
3. The information is stored in the MySQL database.
4. All records are displayed in the table.
5. Click **Toggle** to switch the student's status between **Active** and **Inactive**.

---

## 🚀 Installation

1. Create a MySQL database.
2. Import the `student.sql` file.
3. Update the database connection in `index.php`.
4. Upload the project to a PHP server (or InfinityFree).
5. Open the project in your browser.

---

## 📌 Learning Objectives

This project demonstrates how to:

- Connect PHP with MySQL.
- Handle HTML forms using PHP.
- Insert data into a database.
- Retrieve and display records dynamically.
- Update database values using PHP.
- Deploy a PHP project online.

---

## 👩‍💻 Developed By

**Amal Yasser**  
Computer and Network Engineering Student  
University of Jeddah
