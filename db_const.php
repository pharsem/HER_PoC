<?php
# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
const DB_HOST = 'SERVER';
const DB_USER = 'USER';
const DB_PASS = 'PASSWORD';
const DB_NAME = 'her_poc';
?>





<?php
//
//$id = $password = '';
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $id = $_POST['studentID'];
//    $password = $_POST['password'];
//}
//
//
////if (!isset($_POST['submit'])){
////    header( "Location: http://google.com" ); die;
////    ?>
<!--<!--    <!-- The HTML login form -->-->-->
<!--<!--    <form action="-->--><?////=$_SERVER['PHP_SELF']?><!--<!--" method="post">-->-->
<!--<!--        Student ID: <input type="text" name="username" /><br />-->-->
<!--<!--        Password: <input type="password" name="password" /><br />-->-->
<!--<!---->-->
<!--<!--        <input type="submit" name="submit" value="Login" />-->-->
<!--<!--    </form>-->-->
<!--<!--    -->--><?php
////} else {
////    $username = $_POST['username'];
////    $password = $_POST['password'];
////
////    $sql = "SELECT * from students WHERE student_id LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
////    $result = $mysqli->query($sql);
////    if (!$result->num_rows == 1) {
////        echo "<p>Invalid username/password combination</p>";
////    } else {
////        echo "<p>Logged in successfully</p>";
////        header( "Location: http://google.com" ); die;
////    }
////}
////?>
<!---->
<!--    <form method="post" action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?><!--" >-->
<!--        Student ID: <input type="text" name="studentID" value="--><?php //echo $id;?><!--">-->
<!--        <br><br>-->
<!--        Password: <input type="password" name="password">-->
<!--        <input type="submit" name="submit" value="Submit">-->
<!--    </form>-->
<!---->
<?php
//
//    echo "<h2>Your Input:</h2>";
//    echo $id;
//    echo "<br>";
//    echo $password;
//
//
//?>

<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>