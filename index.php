<?php
include "connect.php";

ob_start();
session_start();

?>


<?php include "header.php"; ?>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <?php
        if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['role'] == 'student') {
            include "student_view.php";
        } else if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['role'] == 'teacher') {
            include "teacher_view.php";
        } else { ?>
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#student">Student</a></li>
            <li><a data-toggle="pill" href="#teacher">Lærer</a></li>
        </ul>

        <div class="tab-content">
            <div id="student" class="tab-pane fade in active">
                <?php include "login_student.php"; ?>
            </div>
            <div id="teacher" class="tab-pane fade">
                <?php include "login_teacher.php"; ?>
            </div>
        </div>

        <?php
        }; ?>
    </div>
</div>

<?php include "footer.php"; ?>