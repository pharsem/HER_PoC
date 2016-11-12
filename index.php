<?php
include "connect.php";

ob_start();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>HER</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['role'] == 'student') {
    echo 'Student ' . $_SESSION['username'] . ' logget inn';

    include "student_view.php";

    ?>
    <a href="logout.php">Logg ut</a> <?php
} else if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['role'] == 'teacher') {
    echo 'Lærer ' . $_SESSION['username'] . ' logget inn';

    include "teacher_view.php";

    ?>
    <a href="logout.php">Logg ut</a> <?php
} else { ?>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#student">Student</a></li>
    <li><a data-toggle="pill" href="#teacher">Lærer</a></li>
</ul>

<div class="tab-content">
    <div id="student" class="tab-pane fade in active">
        <h3>STUDENT</h3>
        <?php include "login_student.php"; ?>
    </div>
    <div id="teacher" class="tab-pane fade">
        <h3>LÆRER</h3>
        <?php include "login_teacher.php"; ?>
    </div>
</div>

<?php
}; ?>

</body>
</html>
