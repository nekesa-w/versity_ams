-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 08:36 AM
-- Server version: 11.4.4-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `versity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin1', '$2y$10$33UqxVrRiBLTNizF02O2l.BMqDimmLfJdYpMZVRYkObLtYnCMAbzm', 'admin', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(2, 'admin2', '$2y$10$VnjhZAS7.qmpspVAmPp7heFAmnvZKiQUvzNIOCJZag4f6b1cBNHze', 'admin', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `fullname` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`fullname`, `phone`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
('Chris Kaiga', 1234567890, 'chrisk@example.com', '$2y$10$za5jDnYHeDNdmoJxKOeNu.Z.DkiCWtHy9iMgRXMIgTVqgV9Wfon3m', 'applicant', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
('Janet Mugo', 9876543210, 'janetm@example.com', '$2y$10$.4z71wNcMENpmB9kt7DqD.T4eyFeiluMw0DFhDW9csz.t9x/bShBq', 'applicant', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
('Nicole', 463283892, 'nicole@tester.com', '$2y$10$lQzWuwWTcGT65794QMtIA.D3HyTvrRc148ya55b80ndMqaUcHcrP.', 'applicant', '2025-05-25 03:35:53', '2025-05-25 03:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `application_forms`
--

CREATE TABLE `application_forms` (
  `applicant_id` bigint(20) UNSIGNED NOT NULL,
  `national_passport_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `transcripts` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_forms`
--

INSERT INTO `application_forms` (`applicant_id`, `national_passport_id`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `address`, `citizenship`, `email`, `phone`, `intake`, `course_id`, `transcripts`, `role`, `created_at`, `updated_at`) VALUES
(1, 987654321, 'Chris', NULL, 'Kaiga', 'Male', '1995-07-10', '1234 Nairobi, Kenya', 'Kenyan', 'chrisk@example.com', 1234567890, 'Fall 2025', 1, 'transcripts/chris_kaiga.pdf', 'applicant', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'course',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `faculty_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'History', 1, 'course', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(2, 'Philosophy', 1, 'course', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(3, 'Physics', 2, 'course', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(4, 'Biology', 2, 'course', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(5, 'Mechanical Engineering', 3, 'course', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(6, 'Civil Engineering', 3, 'course', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'faculty',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `faculty_name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Faculty of Arts', 'faculty', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(2, 'Faculty of Science', 'faculty', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(3, 'Faculty of Engineering', 'faculty', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lecturer_id` bigint(20) UNSIGNED NOT NULL,
  `national_passport_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'lecturer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturer_id`, `national_passport_id`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `email`, `email_verified_at`, `phone`, `faculty_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 123456789, 'John', 'Adam', 'Wekesa', 'Male', '1985-06-15', 'johnw@example.com', '2025-02-23 05:01:23', 1234567890, 1, 'lecturer', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(2, 987654321, 'Jane', 'Njeri', 'Wambui', 'Female', '1990-08-25', 'janew@example.com', '2025-02-23 05:01:23', 9876543210, 2, 'lecturer', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_11_09_132413_create_students_table', 1),
(5, '2022_11_09_132435_create_admins_table', 1),
(6, '2022_11_09_132535_create_lecturers_table', 1),
(7, '2022_11_09_132554_create_staff_table', 1),
(8, '2022_12_28_131056_create_courses_table', 1),
(9, '2022_12_28_133440_create_applications_table', 1),
(10, '2023_01_01_091850_create_faculties_table', 1),
(11, '2023_01_02_103648_create_application_forms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `national_passport_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `department_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'staff',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `national_passport_id`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `email`, `email_verified_at`, `phone`, `department_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 123456789, 'Alice', 'Jones', 'Kamau', 'Female', '1985-04-10', 'alicek@example.com', '2025-02-23 05:01:23', 987654321, 1, 'staff', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(2, 987654321, 'Michael', 'Chris', 'Kuria', 'Male', '1990-07-20', 'michaelk@example.com', '2025-02-23 05:01:23', 123456789, 2, 'staff', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `national_passport_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `national_passport_id`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `address`, `citizenship`, `email`, `phone`, `intake`, `course_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 123456789, 'John', 'Chris', 'Atieno', 'Male', '2000-05-15', '123 Main Street', 'Kenya', 'johna@example.com', 987654321, 'Fall 2025', 1, 'student', '2025-02-23 05:01:23', '2025-02-23 05:01:23'),
(2, 987654321, 'Jane', 'Stella', 'Juma', 'Female', '2001-08-22', '456 Another St', 'Kenya', 'janej@example.com', 123456789, 'Spring 2025', 2, 'student', '2025-02-23 05:01:23', '2025-02-23 05:01:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_admin_id_unique` (`admin_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD UNIQUE KEY `applications_email_unique` (`email`);

--
-- Indexes for table `application_forms`
--
ALTER TABLE `application_forms`
  ADD PRIMARY KEY (`applicant_id`),
  ADD UNIQUE KEY `application_forms_applicant_id_unique` (`applicant_id`),
  ADD UNIQUE KEY `application_forms_email_unique` (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `courses_course_id_unique` (`course_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`),
  ADD UNIQUE KEY `faculties_faculty_id_unique` (`faculty_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD UNIQUE KEY `lecturers_lecturer_id_unique` (`lecturer_id`),
  ADD UNIQUE KEY `lecturers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `staff_staff_id_unique` (`staff_id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application_forms`
--
ALTER TABLE `application_forms`
  MODIFY `applicant_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculty_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `lecturer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
