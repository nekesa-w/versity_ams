<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('/backend/css/style.css') }}">
	<title>Admin Panel</title>
</head>

<body>
	<div class="side-menu">
		<div class="brand-name">
			<h1><a href="{{ route('dashboard') }}">Admin</a>
				<h1>
		</div>

		<ul>
			<li><a href="{{ route('admin_faculty') }}">Faculty</a></li>
			<li><a href="{{ route('admin_course') }}">Course</a></li>
			<li><a href="{{ route('admin_student') }}">Student</a></li>
			<li><a href="{{ route('admin_lecturer') }}">Lecturer</a></li>
			<li><a href="{{ route('admin_staff') }}">Staff</a></li>
		</ul>
	</div>


	<div class="container">


		<div class="header">
			<div class="nav">
				<div class="user">
					<ul>
						@if(Session::has('adminId'))
						<li><a href="{{ route('admin_logout') }}">Logout</a></li>
						@else
						<li><a href="{{ route('admin_login') }}">Login</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>


		<div class="content">
			<div class="cards">
				<div class="card">
					<div class="box">
						<h1>{{ $faculties }}</h1>
						<h3>Faculties</h3>
					</div>
					<div class="icon-case">
						<img src="students.png" alt="">
					</div>
				</div>


				<div class="card">
					<div class="box">
						<h1>{{ $courses }}</h1>
						<h3>Courses</h3>
					</div>
					<div class="icon-case">
						<img src="teachers.png" alt="">
					</div>
				</div>


				<div class="card">
					<div class="box">
						<h1>{{ $students }}</h1>
						<h3>Students</h3>
					</div>
					<div class="icon-case">
						<img src="schools.png" alt="">
					</div>
				</div>


				<div class="card">
					<div class="box">
						<h1>{{ $lecturers }}</h1>
						<h3>Lecturers</h3>
					</div>
					<div class="icon-case">
						<img src="income.png" alt="">
					</div>
				</div>


				<div class="card">
					<div class="box">
						<h1>{{ $staff }}</h1>
						<h3>Staff</h3>
					</div>
					<div class="icon-case">
						<img src="income.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>