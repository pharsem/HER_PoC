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
<header>
        <div class="row">
        <a href="index.php"><img src="logo.png" alt="HER"></a>
    </div>

    <div class="row">
        <h5>
            <?php
            if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['role'] == 'student') {
                echo 'Student ' . $_SESSION['username'] . ' logget inn';

            } else if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['role'] == 'teacher') {
                echo 'Lærer ' . $_SESSION['username'] . ' logget inn';
            } ?>
        </h5>
        <h5>
            <?php
            if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {
                echo "<a href='logout.php'>Logg ut</a>";
            } ?>

        </h5>
    </div>

</header>