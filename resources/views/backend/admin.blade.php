<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title> Admin Dashboard</title>

      <link rel="shortcut icon" href="{{ asset('/backend/assets/img/favicon.png') }}">
      <link rel="stylesheet" href="{{ asset('/backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/assets/plugins/fontawesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/backend/assets/css/style.css') }}">

      <script src="{{ asset('js/app.js') }}" defer></script>
   </head>
   
   <body>

      <!-- start wrapper -->
      <div class="main-wrapper">
         <!-- start header -->

         <div class="header">
            <div class="header-left">
               <a href="index.html" class="logo">
               <img src="{{ asset('/backend/assets/img/logo.png') }}" alt="Logo">
               </a>
               <a href="index.html" class="logo logo-small">
               <img src="{{ asset('/backend/assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
               </a>
            </div>

            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  </a>
                  
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6>Ryan Taylor</h6>
                           <p class="text-muted mb-0">Administrator</p>
                        </div>
                     </div>
                     <a class="dropdown-item" href="profile.html">My Profile</a>
                     <a class="dropdown-item" href="inbox.html">Inbox</a>
                     <a class="dropdown-item" href="login.html">Logout</a>
                  </div>
               </li>
            </ul>
         </div>
         <!-- end header -->

         <!-- start sidebar -->
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     <li class="submenu active">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="index.html" class="active">Admin Dashboard</a></li>
                           <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.html">Student Dashboard</a></li>
                        </ul>
                     </li>

                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="students.html">Student List</a></li>
                           <li><a href="student-details.html">Student View</a></li>
                           <li><a href="add-student.html">Student Add</a></li>
                           <li><a href="edit-student.html">Student Edit</a></li>
                        </ul>
                     </li>

                     <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Lecturers </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="teachers.html">Lecturer List</a></li>
                           <li><a href="teacher-details.html">Lecturer View</a></li>
                           <li><a href="add-teacher.html">Lecturer Add</a></li>
                           <li><a href="edit-teacher.html">Lecturer Edit</a></li>
                        </ul>
                     </li>

                     <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Faculty </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="departments.html">Faculty List</a></li>
                           <li><a href="add-department.html">Faculty Add</a></li>
                           <li><a href="edit-department.html">Faculty Edit</a></li>
                        </ul>
                     </li>

                     <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="subjects.html">Course List</a></li>
                           <li><a href="add-subject.html">Course Add</a></li>
                           <li><a href="edit-subject.html">Course Edit</a></li>
                        </ul>
                     </li>

                     <li class="menu-title">
                        <span>Management</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="fees-collections.html">Fees Collection</a></li>
                           <li><a href="expenses.html">Expenses</a></li>
                           <li><a href="salary.html">Salary</a></li>
                           <li><a href="add-fees-collection.html">Add Fees</a></li>
                           <li><a href="add-expenses.html">Add Expenses</a></li>
                           <li><a href="add-salary.html">Add Salary</a></li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                     </li>
                     <li>
                        <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                     </li>
                     <li>
                        <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                     </li>
                     
                     <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="forgot-password.html">Forgot Password</a></li>
                           <li><a href="error-404.html">Error Page</a></li>
                        </ul>
                     </li>
                     
                  </ul>
               </div>
            </div>
         </div>
         <!-- end sidebar -->




         <!-- start content -->
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-one w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-user-graduate"></i>
                              </div>
                              <div class="db-info">
                                 <h3>50055</h3>
                                 <h6>Students</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-two w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-crown"></i>
                              </div>
                              <div class="db-info">
                                 <h3>50+</h3>
                                 <h6>Awards</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-three w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-building"></i>
                              </div>
                              <div class="db-info">
                                 <h3>30+</h3>
                                 <h6>Department</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 d-flex">
                     <div class="card bg-four w-100">
                        <div class="card-body">
                           <div class="db-widgets d-flex justify-content-between align-items-center">
                              <div class="db-icon">
                                 <i class="fas fa-file-invoice-dollar"></i>
                              </div>
                              <div class="db-info">
                                 <h3>$505</h3>
                                 <h6>Revenue</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>   
            </div>
         </div>

         <!-- end content -->

         <!-- start footer -->
         <footer>
            <p>Copyright © 2022 VERSITY.</p>
         </footer>
         <!-- end footer -->

      </div>
      <!-- end wrapper -->
      
      <script src="{{ asset('/backend/assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('/backend/assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('/backend/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
      <script src="{{ asset('/backend/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
      <script src="{{ asset('/backend/assets/plugins/apexchart/chart-data.js') }}"></script>
      <script src="{{ asset('/backend/assets/js/script.js"></script>

   </body>
   
</html>