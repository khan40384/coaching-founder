<!doctype html>

<head>
    <title> Welcome to Coaching founder</title>
    <link href="style/bootstrap.min.css" rel="stylesheet" />

    <link href="style/courses.css" rel="stylesheet" />
   
   
</head>

<body style="background:rgba(200, 241, 255, 0.514);">
    <header>
        <img src="header-managerCoach.jpg" alt="Header" height=100dp width=100% />
    </header>
    <nav class="nav">
        <li class="nav-items offset-4">
            <a href="index.php">Home </a> |
            <a href="courses.php">Courses </a>|
            <a href="institutes.php">Top institutes </a>|
            <a href="contact.php">Contact us </a>|
            <a href="login.php">Login </a>|
            <a href="signup.php">Signup </a>
        </li>
    </nav>
    <table border="1px solid" width=100% >
        <tr>
            <th><h1>Secondry courses</h1></th>
            <th><h1>Higher Secondry courses</h1></th>
            <th><h1>Competetive courses</h1></th>
        </tr>
       <?php
       include("include/coursesContent.php")
       ?>
    </table>
    <footer>
            <p>All Rights Reserved by Coaching founder</p>
        </footer>
    </body>
    