# School Library Management System

## Overview
A web application to manage a school library with role-based functionalities for administrators, managers, and learners. Built with **PHP 8 (OOP)** and **MySQL (PDO)**.

## Core Features
1. **Authentication**:
   - Secure login/logout with sessions and cookies.

2. **Role Management**:
   - Roles: **Administrator**, **Manager**, **Learner**.
   - Admin: Manage users and roles.
   - Manager: Manage books and approve/reject reservations.
   - Learner: Reserve books, view, and cancel reservations.

3. **Book Management**:
   - CRUD operations for books.
   - Categorization by tags and categories.

4. **Reservation System**:
   - Learners can reserve books with statuses:
     - **Pending**: Awaiting manager validation.
     - **Confirmed**: Reservation approved.
     - **Completed**: Book returned.
   - Managers validate or reject reservations.

5. **User & Role Management**:
   - Admin assigns and manages user roles with specific permissions.

## Entity Relationships
- **User**: Linked to roles (Admin, Manager, Learner).
- **Book**: Categorized by tags and categories.
- **Reservation**: Tracks the state (Pending, Confirmed, Completed).

## Technologies
- **Backend**: PHP 8 (OOP)
- **Database**: MySQL (PDO)
- **Frontend**: HTML, CSS, JavaScript

## User Stories
- **Learners**: Reserve, cancel, and view book reservations.
- **Managers**: Validate reservations and manage book inventory.
- **Administrators**: Manage users, roles, and generate reports.
