
<?
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>

<h2>Logg inn med student-ID og passord</h2>

<?php
$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {

    $studentID = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * from students WHERE student_id LIKE '{$studentID}' AND password LIKE '{$password}' LIMIT 1";
    $result = $mysqli->query($sql);

    if (!$result->num_rows == 1) {
        echo "<p>Feil student-ID/passord</p>";
    } else {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['role'] = 'student';
        $_SESSION['username'] = $studentID;

        header("Refresh:0");
    }
}
?>


<form class = "form-signin" role = "form"
      action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
      ?>" method = "post">
    <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
    <input type = "text" name = "username" placeholder = "Student-ID" required autofocus><br>
    <input type = "password" name = "password" placeholder = "Passord" required>
    <button class = "btn btn-lg btn-primary" type = "submit" name = "login">Login</button>
</form>


