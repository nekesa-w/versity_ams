<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/backend/css/style.css') }}">
    <title>Applications</title>
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
            @if($errors->any())
            <h4 class="errors">{{$errors->first()}}</h4>
            @endif


            @if(session('success'))
            <h4 class="success">{{session('success')}}</h4>
            @endif

            <div class="content-table">
                <div class="admin-table">
                    <div class="title">
                        <h2>View Applications</h2>
                    </div>

                    <div class="application-table">
                        <table>
                            <tr>
                                <th>Applicant Id</th>
                                <th>National Id</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Date_of_Birth</th>
                                <th>Address</th>
                                <th>Citizenship</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Intake</th>
                                <th>Course ID</th>
                                <th>Course Name</th>
                                <th>Transcripts</th>
                                <th>Approve</th>
                                <th>Reject</th>
                            </tr>

                            @foreach($applicant as $item)
                            <tr>

                                <td> {{$item->applicant_id}}</td>
                                <td> {{$item->national_passport_id}}</td>
                                <td> {{$item->first_name}}</td>
                                <td> {{$item->middle_name}}</td>
                                <td> {{$item->last_name}}</td>
                                <td> {{$item->gender}}</td>
                                <td> {{$item->date_of_birth}}</td>
                                <td> {{$item->address}}</td>
                                <td> {{$item->citizenship}}</td>
                                <td> {{$item->email}}</td>
                                <td> {{$item->phone}}</td>
                                <td> {{$item->intake}}</td>
                                <td> {{$item->course_id}}</td>
                                <td> {{$item->getCoursesApp->course_name}}</td>
                                <td><a href="{{ asset('/storage/'.$item->transcripts) }}">View</a></td>
                                <td><a class="approve" href="applicant_approve/{{$item->applicant_id}}">Approve</a></td>
                                <td><a class="reject" href="applicant_reject/{{$item->applicant_id}}">Reject</a></td>
                            </tr>
                            @endforeach
                        </table>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>