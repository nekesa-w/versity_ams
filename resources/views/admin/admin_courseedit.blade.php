<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/backend/css/style.css') }}">
    <title>Course</title>
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

            <div class="forms">

                <form action="{{ route('course_update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="cid" value="{{$Info->course_id}}">
                    <div class="title">
                        <h2>Edit Course</h2>
                    </div>

                    <label for="name">Course Name</label>
                    <input id="name" name="name" type="text" value="{{$Info->course_name}}" required /><br>

                    <label for="faculty">Current Faculty Id: {{$Info->faculty_id}}</label>

                    <label for="faculty">Faculty</label>
                    <select id="faculty" name="faculty" required><br>
                        @foreach($faculty as $item)
                        <option value="{{$item->faculty_id}}">{{$item->faculty_name}}: {{$item->faculty_id}}</option>
                        @endforeach
                    </select>


                    <input type="submit" value="Edit"><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>