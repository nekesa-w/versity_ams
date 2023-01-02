<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/backend/css/style.css') }}">
    <title>Faculties</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1><a href="{{ route('dashboard') }}">Admin</a>
                <h1>
        </div>

        <ul>
            <li><a href="{{ route('admin_application') }}">Applications</a></li>
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
                        <h2>View Faculties</h2>
                    </div>

                    <a href="#create">Add New Faculty</a>

                    <table>
                        <tr>
                            <th>Faculty Id</th>
                            <th>Faculty Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        @foreach($data as $item)
                        <tr>
                            <td> {{$item->faculty_id}}</td>
                            <td> {{$item->faculty_name}}</td>
                            <td><a href="edit/{{$item->faculty_id}}">Edit</a></td>
                            <td><a href="delete/{{$item->faculty_id}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="forms">

                <a id="create"></a>
                <form action="faculty_create" method="POST">
                    @csrf
                    <div class="title">
                        <h2>Add Faculty</h2>
                    </div>

                    <label for="name">Faculty Name</label>
                    <input id="name" name="name" type="text" required /><br>

                    <input type="submit" value="Add"><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>