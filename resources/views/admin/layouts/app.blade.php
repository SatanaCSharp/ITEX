<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @include('admin.includes.head')
</head>

<body class="">

<div class="wrapper ">
    <div class="sidebar" data-color="orange">

        <div class="logo">
            <a href="#" class="simple-text logo-mini">
               IT
            </a>
            <a href="#" class="simple-text logo-normal">
                EX
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="#">
                        <i class="fa fa-tachometer-alt fa-2x"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-2x"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-building fa-2x"></i>
                        <p>Companies</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-calendar-alt fa-2x"></i>
                        <p>Events</p>
                    </a>
                </li>



            </ul>
        </div>
    </div>
    <div class="main-panel">

        <div class="panel-header panel-header-lg">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-lg-4">
                    @yield('content')

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>