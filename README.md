# Versity - Academic Management System

## Introduction

**Versity** is an academic management system built using Laravel 9 that focuses on the application process. The system allows students to apply for courses, administrators to manage applications, and faculty members to oversee academic processes.

## Images
**Home**

The main landing page of the university application system, showcasing available programs and essential details for prospective students.
![Versity Home](/public/frontend/assets/images/versity_home.png)

**Login**

The login page where users, including students, lecturers, and admins, can access their respective dashboards.
![Versity Login](/public/frontend/assets/images/versity_login.png)

**Application Form**

A structured form for applicants to submit their personal details, academic qualifications, and course preferences.
![Versity AppForm](/public/frontend/assets/images/versity_applicationform.png)

**Admin Dashboard**

The admin panel where administrators can manage applications, view user data, and oversee system operations.
![Versity Admin](/public/frontend/assets/images/versity_admin.png)

**Admin Application View**

A view of all submitted applications, allowing admins to review applicant information and status.
![Versity ViewApp](/public/frontend/assets/images/versity_application.png)

**Admin Courses View**

A page displaying the list of available courses, categorized by faculty, with relevant details for prospective students.
![Versity ViewCour](/public/frontend/assets/images/versity_courses.png)

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

