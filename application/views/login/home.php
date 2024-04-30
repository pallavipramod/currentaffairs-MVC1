<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
</head>
<body>
    <div class="navbar">
        <div class="row">
            <div class="col-md-12">
                <h2>Home</h2>
            </div>
        </div>
    </div>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Home
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="media-wrapper">
                            <h2>Progress</h2>
                            <div class="col-md-3" style="background: #efefef; border: 1px solid #ababab;">
                                <h3>Item-1</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                                <div class="task-list">
                                    <ul>
                                        <li class="text-success">Task-1</li>
                                        <li class="text-success">Task-2</li>
                                        <li class="text-success">Task-3</li>
                                        <li class="text-success">Task-4</li>
                                        <li class="text-danger">Task-5</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3" style="background: #efefef; border: 1px solid #ababab;">
                                <h3>Item-2</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                                <div class="task-list">
                                    <ul>
                                        <li class="text-success">Task-1</li>
                                        <li class="text-success">Task-2</li>
                                        <li class="text-danger">Task-3/li>
                                        <li class="text-danger">Task-4</li>
                                        <li class="text-danger">Task-5</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3" style="background: #efefef; border: 1px solid #ababab;">
                                <h3>Item-3</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <div class="task-list">
                                    <ul>
                                        <li class="text-success">Task-1</li>
                                        <li class="text-success">Task-2</li>
                                        <li class="text-success">Task-3</li>
                                        <li class="text-danger">Task-4</li>
                                        <li class="text-danger">Task-5</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3" style="background: #efefef; border: 1px solid #ababab;">
                                <h3>Item-4</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <div class="task-list">
                                    <ul>
                                        <li class="text-success">Task-1</li>
                                        <li class="text-danger">Task-2</li>
                                        <li class="text-danger">Task-3</li>
                                        <li class="text-danger">Task-4</li>
                                        <li class="text-danger">Task-5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    body{
        overflow-x: hidden;
    }
    .navbar{
        width: 100vw;
        background-color: #ccd5ae;
    }   
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled {
        padding-left: 250px;
    }
    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background: #000;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }
    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }
    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }
    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }
    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999999;
    }
    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
    }
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }
    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }
    .sidebar-nav > .sidebar-brand a {
        color: #999999;
    }
    .sidebar-nav > .sidebar-brand a:hover {
        color: #fff;
        background: none;
    }
    @media(min-width:768px) {
        #wrapper {
            padding-left: 250px;
        }
        #wrapper.toggled {
            padding-left: 0;
        }
        #sidebar-wrapper {
            width: 250px;
        }
        #wrapper.toggled #sidebar-wrapper {
            width: 0;
        }
        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }
        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>
</html>