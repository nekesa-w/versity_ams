# Versity - University Application System

## Introduction

**Versity** is a **University Application Management System** built using **Laravel 9**. The application allows students to apply for courses, administrators to manage applications, and faculty members to oversee academic processes.

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/nekesa-w/versity.git
cd versity
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Configure Environment

Generate an application key:

```bash
php artisan key:generate
```

### 4. Set Up Database

Update `.env` with your database credentials:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run migrations:

```bash
php artisan migrate --seed
```

### 5. Start the Server

```bash
php artisan serve
```

Your application will be available at: `http://127.0.0.1:8000`

---

## Application Functionalities (Based on Routes)

### Public Access
- **Homepage (`/`)** - Displays the main university page.
- **Faculties (`/versity/faculty_of_art`, `/versity/faculty_of_design`, `/versity/faculty_of_art_and_science`)** - Show information about different faculties.

### Student Application Process
- **Register (`/application_reg`)** - Allows students to create an application account.
- **Login (`/application_login`)** - Student authentication.
- **Application Form (`/application_form`)** - Provides a form to apply for courses.
- **Submit Form (`/upload_form`, `/application_form`)** - Handles application submission.
- **Logout (`/application_logout`)** - Ends student session.

### Admin Dashboard & Authentication
- **Dashboard (`/dashboard`)** - Displays system statistics (applicants, faculties, courses, students, etc.).
- **Admin Login (`/admin_login`)** - Authenticates admins.
- **Admin Logout (`/admin_logout`)** - Ends admin session.

### Faculty & Course Management
- **Manage Faculties (`/admin_faculty`)** - Lists all faculties.
- **Add/Edit/Delete Faculty (`/faculty_create`, `/edit/{faculty_id}`, `/faculty_update`, `/delete/{faculty_id}`)** - CRUD operations for faculties.
- **Manage Courses (`/admin_course`)** - Lists available courses.
- **Add/Edit/Delete Course (`/course_create`, `/course_edit/{course_id}`, `/course_update`, `/course_delete/{course_id}`)** - CRUD operations for courses.

### Application Review & Management
- **View Applications (`/admin_application`)** - Lists all student applications.
- **Approve Application (`/applicant_approve/{applicant_id}`)** - Accepts student application.
- **Reject Application (`/applicant_reject/{applicant_id}`)** - Declines student application.
- **Convert Applicant to Student (`/applicant_student`)** - Finalizes enrollment.

### Additional Admin Functionalities
- **Manage Staff (`/admin_staff`)** - Admin can oversee staff members.
- **Manage Students (`/admin_student`)** - View and manage student records.
- **Manage Lecturers (`/admin_lecturer`)** - Handle lecturer details.

---

## Authentication
- Admins and students have separate authentication processes.
- Middleware can be added to protect routes.

## License

This project is open-source under the [MIT License](LICENSE).

